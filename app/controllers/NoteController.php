<?php

class NoteController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('notes.index')->with('notes', Note::all());
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$note = new Note;
		$note->content = Input::get('content');
		$note->save();
		return Redirect::action('NoteController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Note::destroy($id);
		return Redirect::action('NoteController@index');
	}

}
