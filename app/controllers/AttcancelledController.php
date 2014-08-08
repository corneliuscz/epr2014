<?php

class AttcancelledController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /attendees
	 *
	 * @return Response
	 */
	public function index()
	{
    if (Auth::check()) {
      $cancellees = Attcancelled::all();
      return View::make('admin.cancelled')->with('cancellees', $cancellees);
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

  }
}
