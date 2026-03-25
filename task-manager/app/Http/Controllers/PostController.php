<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Rules\uppercase;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('post')->paginate(3);
        return view('post.posts', compact('posts')); 
    }

    public function create(): View
    {
        return view('post.createPost');
    }

    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
            // 'username'=>['required',new uppercase],
            'username'=> ['required', function(string $attribute,mixed $value,Closure $fail ){
                if(strtoupper($value)!== $value){
                    $fail("the {$attribute} must be in uppercase");
                }
            }], 
            'useremail'=>'required|email',
            'photo' => [
                'required',
                File::image()->max(2048),
            ],

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $data = $validator->validated();
            $username = $data['username'];
            $useremail = $data['useremail'];
            $path = $request->file('photo')->store('photos', 'public');
            // DB::insert("insert into post (name, email ,img) values (?, ?, ?)",[$username, $useremail, $path]);
            DB::table('post')->insert([
                'name'  => $username,
                'email' => $useremail,
                'img'   => $path
            ]);
        }
        return redirect('/');
        // return $request->all();
        // return $request->safe()->only(['username']);
    }

    public function edit(Request $request,int $id)
    {
        return view('post.editPost',['id' => $id]);
        
    }

     public function update(Request $request,int $id)
    {
        $validator = Validator::make($request->all(),[
            // 'username'=>['required',new uppercase],
            'username'=> ['required', function(string $attribute,mixed $value,Closure $fail ){
                if(strtoupper($value)!== $value){
                    $fail("the {$attribute} must be in uppercase");
                }
            }], 
            'useremail'=>'required|email',
            'photo' => [
                'required',
                File::image()->max(2048),
            ],

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }else{
            $data = $validator->validated();
            $username = $data['username'];
            $useremail = $data['useremail'];
            $path = $request->file('photo')->store('photos', 'public');
            DB::table('post')
                ->where('id', $id)
                ->update([
                    'name' => $username,
                    'email' => $useremail,
                    'img' => $path
                ]);
        }
        return redirect('/');
    }


    public function destroy($id)
    {
        DB::table('post')
                ->where('id', $id)
                ->delete();

        return redirect('/');
    }
}
