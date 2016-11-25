<?php namespace App\Http\Controllers\Frontend;

use Input;
use Validator;
use Redirect;

use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Frontend;
//use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use Mail;
use App\Models\Article;
use App\Models\Category;
use App\Models\Resume;
use App\Models\Comment;
use App;
use Illuminate\Support\Facades\Response;
use Storage;
use Image;

class UploadController extends Controller {

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
		//
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
	public function upload(Request $request){

		$files = $request->file('files');

		if(!empty($files)):
			$date=date('d.m.Y');
			//$road = Storage::makeDirectory('upload/files/' . $date, '0777', true, true);
			foreach($files as $file):
				Storage::put('upload/files/'.$date.'/'.$file->getClientOriginalName(), file_get_contents($file));
			endforeach;

		endif;

		return \Response::json(array('success' => true));
	}
}
