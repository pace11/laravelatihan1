<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function ambilData()
	{
		$user = DB::table('users')->get();
		$a=1;
		foreach ($user as $us ) {
			echo "[".$a."] ".($us->name)." [=] ".($us->email)."<br>";
			$a++;
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function lihatData()
	{
		$users = User::all();
		return View::make('users')->with('users', $users);
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = DB::table('users')->where('id', $id)->first();
		echo "[".$id."] ".($user->name)." [=] ".($user->email);

	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
