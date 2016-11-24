<?php namespace App\Http\Controllers\Frontend;


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

class ResumeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$meta = view()->share('meta', Article::where('name', '=', 'meta.company')->first());

		return view('frontend.resume');
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
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:255',
			'telephone' => 'required',
		]);

		$all = $request->all();
		if (isset($all['date_birthday']))
			$all['date_birthday'] = date('Y-m-d H:i:s',strtotime($all['date_birthday']));
		Resume::create($all);
		//Отправка уведомления про добавления нового отзыва на email
		//Mail::send('emails.comment', $all, function($message){
		//	$message->to('webtestingstudio@gmail.com', 'Eurostandard')->subject('Повідомлення про про нове резюме з сайту "Eurostandard" ');
		//});
		return response()->json([
			"status" => 'success'
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

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
