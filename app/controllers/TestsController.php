<?php

class TestsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $result = Test::all();
        return $result;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        // Just hard coding some arbitrary value for now...
        $test = new Test;
        $test->email = 'someone@test.com';

        if($test->save()) {
            return 'Saved.';
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $result = Test::find($id);

        if ($result) {
            return $result->toArray();
        } else {
            return 'Resource not found, check id.';
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $data = Test::find($id);

        if (!$data) {
            return 'Resource not found, check id.';
        }

        $data = $data->toArray();

        return View::make('tests.update')->with('data', $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $test = Test::find($id);
        $email = Input::get('email');
        $test->email = $email;

        if ($test->save()) {
            return $test->toArray();
        } else {
            return 'Error, not saved.';
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $test = Test::find($id);

        if($test) {
            if($test->delete()) {
                return 'Deleted.';
            } else {
                return 'Error saving.';
            }
        }
	}
}
