<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\Log;
class AkunController extends Controller
{




     public function index(): View
    {
        //$this->info("masuk Akuncontroller / index");
        //error_log('masuk Akuncontroller / index.');
       // Log::info('Showing the user profile for user: ');
       // echo "This will never be executed.";
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('akuns.index', compact('posts'));
    }

    public function create(): View
    {

        return view('akuns.create');

    }


    public function store(Request $request): RedirectResponse
    {
        //$this->info("masuk Akuncontroller / create");
        //echo("<script>console.log('PHP: ');</script>");
        //print("aaaa");
        //Log::info('Showing the user profile for user: ');
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('akuns.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);
        //Log::info('Showing the user profile for user: ');
        //render view with post
        return view('akuns.show', compact('akun'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('akuns.edit', compact('akun'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/akuns', $image->hashName());

            //delete old image
            Storage::delete('public/akuns/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('akuns.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/akuns/'. $post->image);

        //delete post
        $post->delete();

        //koment
        //redirect to index
        return redirect()->route('akuns.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
