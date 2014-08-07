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
      return View::make('admin')->with('attendees', $attendees);
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

        if ($validation->fails()) {
          return Redirect::back()->withErrors($validation)->withInput();
        } else {
          $attendee = new Attendee;
          $attendee->firstname    = $input['firstname'];
          $attendee->surname      = $input['surname'];
          $attendee->email        = $input['email'];
          $attendee->terms        = $input['terms'];
          $attendee->organisation = $input['organisation'];

          $saved = $attendee->save();

          if ($saved) {
            Mail::send('emails.registration', $input, function($message) use ($attendee)                    
              {
                $message
                  ->to($attendee->email,  $attendee->firstname.' '.$attendee->surname)
                  ->subject('Registrace na konferenci EPR 2014!');
               });
            return Redirect::intended('/')->with('flash_message', 'Vaše registrace na konferenci byla úspěšná');
          } else {
            return "Něco se rozbilo";
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
		//
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
        return View::make('attendee.edit', compact('attendee'));
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
            return '<div class="alert alert-danger" role="alert">Něco se rozbilo, zavolej Pepu</div>';
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
		$deleted = Attendee::destroy($id);

        if ($deleted) {
          return Redirect::intended('/admin')->with('flash_message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> Účastník byl z konference vymazán</div>');
        } else {
            return '<div class="alert alert-danger" role="alert">Něco se rozbilo, zavolej Pepu</div>';
        }
      } else {
        return Redirect::intended('/');
      }
	}

}
