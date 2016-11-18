<?php namespace App\Http\Middleware;

use Closure;
use App;

use App\Models\Article;
use App\Models\Category;
use App\Models\Text;
use App\Models\Lang;
use League\Flysystem\Config;

class FrontendInit {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Get current lang object from db
		$currentLang = Lang::where('lang',"=", $request->lang)
			->first();

		if (!$currentLang){
			abort('404');
		}

		// Locale setting
		App::setLocale($request->lang);

		$company = Category::where('link','=', 'company')
			->first()
			->articles
			->first();
		$news = Category::where('link','=', 'news')
			->first()
			->articles()
			->where('active','=', '1')
			->get()
			->sortByDesc("priority");
		$works = Category::where('link','=', 'works')
			->first()
			->articles()
			->where('active','=', 1)
			->get()
			->sortByDesc("priority");

		$texts = new Text();

		// Share to views global template variables
		view()->share('langs', Lang::all());
		view()->share('company', $company);
		view()->share('news', $news);
		view()->share('works', $works);
		view()->share('texts', $texts->init());
		view()->share('version', config('app.version'));
        //view()->share('meta', $meta);

		return $next($request);
	}

}
