<?php

class OptionsController extends \BaseController {

  /**
   * Display a listing of the resource.
   * GET /options
   *
   * @return Response
   */
  public function index()
  {
    if (Auth::check()) {
      $options = Option::all();
      return View::make('admin.options.index')->with('options', $options);
    } else {
      return Redirect::intended('/');
    }
  }

  /**
   * Show the form for creating a new resource.
   * GET /options/create
   *
   * @return Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   * POST /options
   *
   * @return Response
   */
  public function store()
  {
    //
  }

  /**
   * Display the specified resource.
   * GET /options/{id}
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
   * GET /options/{id}/edit
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   * PUT /options/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
      if (Auth::check()) {

        $input = Input::all();
/*        $validation = Option::validate($input);

        if ($validation->fails()) {
          return Redirect::back()->withErrors($validation)->withInput();
        } else { */
          $option = Option::FindOrFail($id);

          $option->value = $input['value'];

          $saved = $option->save();

          if ($saved) {
            return Redirect::intended('/admin/nastaveni')->with('flash_message', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> Nastavení aktualizováno</div>');
          } else {
            return Redirect::intended('/admin/nastaveni')->with('flash_message', '<div class="alert alert-danger" role="alert">Změna nastavení se nezdařila</div>');
          }
        }
      /*} else {
        return Redirect::intended('/');
      }*/
  }

  /**
   * Remove the specified resource from storage.
   * DELETE /options/{id}
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

}
