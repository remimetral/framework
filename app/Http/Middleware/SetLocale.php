<?php

namespace App\Http\Middleware;

use App;
use Config;
use Closure;
use Session;
use View;

class SetLocale
{
    /**
     * The availables languages.
     *
     * @array Lang
     */
    protected $lang = ['fr', 'en'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
         if (Session::has('locale')) {
             $locale = Session::get('locale');
         } else {
             $locale = substr($request->getPreferredLanguage(), 0, 2);

             if( in_array($locale, $this->lang) ) {
                 Session::put('locale', $locale);
             } else {
                 Session::put('locale', Config::get('app.locale'));
             }
         }

         /**
          * Set the local config.
          */
         Config::set('app.locale', $locale);

         return $next($request);
     }
}
