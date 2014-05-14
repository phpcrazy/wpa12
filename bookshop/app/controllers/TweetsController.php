<?php

class TweetsController extends \BaseController {

	/**
	 * Display a listing of tweets
	 *
	 * @return Response
	 */
	public function index()
	{
		$tweets = Tweet::all();

		return View::make('tweets.index', compact('tweets'));
	}

	/**
	 * Show the form for creating a new tweet
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tweets.create');
	}

	/**
	 * Store a newly created tweet in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tweet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tweet::create($data);

		return Redirect::route('tweets.index');
	}

	/**
	 * Display the specified tweet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tweet = Tweet::findOrFail($id);

		return View::make('tweets.show', compact('tweet'));
	}

	/**
	 * Show the form for editing the specified tweet.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tweet = Tweet::find($id);

		return View::make('tweets.edit', compact('tweet'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tweet = Tweet::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tweet::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tweet->update($data);

		return Redirect::route('tweets.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tweet::destroy($id);

		return Redirect::route('tweets.index');
	}

}