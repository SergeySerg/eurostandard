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

	public function upload(Request $request){
			$validator = Validator::make($request->all(), [
				'name'  => 'required|max:50',
				'telephone' => 'required',
				'files' => 'required|mimes:doc,docx,xls,xlsx,pdf,txt,rtf|max:5000',

			]);
			if ($validator->fails()) {
				return Response::make($validator->messages()->first());
			}
		//$input = Input::all();
		$all = $request->all();
		$files = $request->file('files');
		if(!empty($files)):
			$date=date('d.m.Y');
			//$road = Storage::makeDirectory('upload/files/' . $date, '0777', true, true);
			foreach($files as $file):
				$extension = $file->getClientOriginalExtension();
				$namefile = 'resume_'.time().'.'.$extension;
				Storage::put('upload/files/'.$date.'/'.$namefile, file_get_contents($file));
			//	Storage::move('upload/files/'.$date.'/'.$file->getClientOriginalName(), 'upload/files/'.$date.'/'.);
			endforeach;

		endif;
		$all['files'] = 'upload/files/'.$date.'/'.$namefile;
		Resume::create($all);

		//Отправка уведомления про добавления нового отзыва на email
		Mail::send('emails.upload-resume', $all, function($message) use ($all){
			$message->to('webtestingstudio@gmail.com', 'Eurostandard')->subject('Повідомлення про про нове резюме з сайту "Eurostandard" ');
			$message->attach($all['files']);
		});
		return \Response::json(array('success' => true));
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

}
