<?php

class AttendeesController extends \BaseController {

  /**
   * Display a listing of the resource.
   * GET /attendees
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::check()) {
      $attendees = Attendee::all();
      return View::make('admin.registered')->with('attendees', $attendees);
    } else {
      return Redirect::intended('/');
    }
  }

  /**
   * Show the form for creating a new resource.
   * GET /attendees/create
   *
   * @return Response
   */
  public function create()
  {
    // Jelikož bude formulář součástí homepage tak toto asi potřebovat nebudeme,
    // ale pro ruční přidávání přes administraci by se to mohlo hodit.
  }

  /**
   * Store a newly created resource in storage.
   * POST /attendees
   *
   * @return Response
   */
  public function store()
  {
    $input = Input::all();
    $validation = Attendee::validate($input);

   // dd($input);

    if ($validation->fails()) {
      return Redirect::back()->withErrors($validation)->withInput();
    } else {
      $attendee = new Attendee;
      $attendee->firstname    = $input['firstname'];
      $attendee->surname      = $input['surname'];
      $attendee->email        = $input['email'];
      $attendee->terms        = $input['terms'];
      $attendee->organisation = $input['organisation'];
      $attendee->cancel_hash  = Hash::make('DELETEMEPLEASE'.$input['email']);

      if (isset($input['hlavni_sal'])) {
        $attendee->hlavni_sal = $input['hlavni_sal'];
      } else {
        $attendee->hlavni_sal = $input['hlavni_sal'] = '-';

      }

      if (isset($input['seminar'])) {
        $attendee->seminar = $input['seminar'];
      } else {
        $attendee->seminar = $input['seminar'] = '-';
      }

      $input['cancel_hash'] = base64_encode ( $attendee->cancel_hash );

      $saved = $attendee->save();

      if ($saved) {
        Mail::send('emails.registration', $input, function($message) use ($attendee)
          {
            $message
              ->to($attendee->email,  $attendee->firstname.' '.$attendee->surname)
              ->subject('Registrace na konferenci EPR 2014!');
          });
        return Redirect::home()
              ->with('flash_message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Zavřít</span></button> Registrace na konferenci proběhla úspěšně.</div>');
      } else {
        return Redirect::home()
              ->with('flash_message', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Zavřít</span></button> Registrace se bohužel nezdařila, zkuste to později prosím.</div>');
      }
    }
  }

  /**
   * Display the specified resource.
   * GET /attendees/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    // Neřešíme, prostě zobrazíme homepage
    return Redirect::intended('/');
  }

  /**
   * Show the form for editing the specified resource.
   * GET /attendees/{id}/edit
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      if (Auth::check()) {
        $attendee = Attendee::FindOrFail($id);
        return View::make('admin.edit', compact('attendee'));
      } else {
        return Redirect::intended('/');
      }
  }

  /**
   * Update the specified resource in storage.
   * PUT /attendees/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
      if (Auth::check()) {

        $input = Input::all();
        $validation = Attendee::validateUpdate($input);

        if ($validation->fails()) {
          return Redirect::back()->withErrors($validation)->withInput();
        } else {
          $attendee = Attendee::FindOrFail($id);

          $attendee->firstname    = $input['firstname'];
          $attendee->surname      = $input['surname'];
          $attendee->email        = $input['email'];
          $attendee->terms        = $input['terms'];
          $attendee->organisation = $input['organisation'];

          $saved = $attendee->save();

          if ($saved) {
            return Redirect::intended('/admin')->with('flash_message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> Účastník byl aktualizován</div>');
          } else {
            return Redirect::intended('/admin')->with('flash_message', '<div class="alert alert-danger" role="alert">Něco se rozbilo, zavolej Pepu</div>');
          }
        }
      } else {
        return Redirect::intended('/');
      }
  }

  /**
   * Remove the specified resource from storage.
   * DELETE /attendees/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    if (Auth::check()) {
      $attendee = Attendee::FindOrFail($id);

      $deleted = Attendee::destroy($id);

      if ($deleted) {
        /*
         * We need to save the old data to the list of cancelled attendees
         */
        $attcancel = new Attcancelled;
        $attcancel->firstname     = $attendee->firstname;
        $attcancel->surname       = $attendee->surname;
        $attcancel->email         = $attendee->email;
        $attcancel->organisation  = $attendee->organisation;
        $attcancel->hlavni_sal    = $attendee->hlavni_sal;
        $attcancel->seminar       = $attendee->seminar;
        $attcancel->registered_at = $attendee->created_at;
        $attcancel->cancelled_at  = new DateTime;
        $attcancel->cancel_hash   = $attendee->cancel_hash;

        $saved = $attcancel->save();

        return Redirect::intended('/admin')->with('flash_message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Zavřít</span></button> Odhlášení proběhlo úspěšně.</div>');
        } else {
            return Redirect::intended('/admin')->with('flash_message', '<div class="alert alert-danger" role="alert"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Zavřít</span></button> Hopla, něco se rozbilo.</div>');
        }
      } else {
        return Redirect::intended('/');
      }
  }


  /**
   * Safe Remove the specified resource from storage - attendee inflicted
   * DELETE /attendees/delete/{email}/{cancel_hash}
   *
   * @param  string  $email
   * @param  string  $cancel_hash
   * @return Response
   */
  public function deleteme($email, $cancel_hash)
  {
    $cancel_hash_decoded = base64_decode($cancel_hash);
    $attendees = Attendee::where('email', 'like', $email)->where('cancel_hash', 'like', $cancel_hash_decoded)->first();

    $attendee = Attendee::FindOrFail($attendees->id);

    $deleted = Attendee::destroy($attendees->id);

    if ($deleted) {
      /*
       * We need to save the old data to the list of cancelled attendees
       */
      $attcancel = new Attcancelled;
      $attcancel->firstname     = $attendee->firstname;
      $attcancel->surname       = $attendee->surname;
      $attcancel->email         = $attendee->email;
      $attcancel->hlavni_sal    = $attendee->hlavni_sal;
      $attcancel->seminar       = $attendee->seminar;
      $attcancel->organisation  = $attendee->organisation;
      $attcancel->registered_at = $attendee->created_at;
      $attcancel->cancelled_at  = new DateTime;
      $attcancel->cancel_hash   = $attendee->cancel_hash;

      $attcancel->save();

      Mail::send('emails.signoff', array(), function($message) use ($attendee)
        {
          $message
            ->to($attendee->email,  $attendee->firstname.' '.$attendee->surname)
            ->subject('Odhlášení z konference EPR 2014!');
        });

      return Redirect::home()
             ->with('flash_message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Zavřít</span></button> Odhlášení proběhlo úspěšně.</div>');
    } else {
      return Redirect::home()
             ->with('flash_message', '<div class="alert alert-danger" role="alert"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Zavřít</span></button> Hopla, něco se rozbilo.</div>');
    }
  }

}
