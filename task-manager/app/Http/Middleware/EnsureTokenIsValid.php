<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if ($request->input('token') !== 'my-secret-token') {
        //     return redirect('/home');
        // }
        echo "<h2>hello world</h2>";
        echo $request->path().'<br>';
        echo $request->url().'<br>';
        echo $request->fullUrl().'<br>';
        echo $request->fullUrlWithQuery(['type' => 'phone']).'<br>';
        echo $request->fullUrlWithoutQuery(['type']).'<br>';
        echo $request->host().'<br>';
        echo $request->httpHost().'<br>';
        echo $request->schemeAndHttpHost().'<br>';
        echo $request->method().'<br>';
        // echo $request->$request->header('X-Header-Name', 'default').'<br>';
        // echo $request->bearerToken().'<br>';
        echo $request->ip().'<br>';
        echo $request->query('name').'<br>';

        // echo $request->all().'<br>';

        echo "<br><br>";
        print_r( $request->ips());
        echo "<br>";
        print_r( $request->getAcceptableContentTypes());
        echo "<br>";
        print_r( $request->all());
        echo "<br>";
        print_r( $request->input());






        


        return $next($request);
    }
}
