<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import Model "Post
use App\Models\SlipGaji;
use Illuminate\Support\Facades\DB;
//return type View
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

//use Illuminate\Support\Facades\Log;

use Mail;
use App\Mail\DemoMail;
class SlipGajiController extends Controller
{




     public function index(): View
    {
        //$this->info("masuk Akuncontroller / index");
        //error_log('masuk Akuncontroller / index.');
       // Log::info('Showing the user profile for user: ');
       // echo "This will never be executed.";
        //get posts
        //$posts = SlipGaji::latest()->paginate(15);
        $posts = SlipGaji::latest()->paginate(10);



        //render view with posts
        return view('slipgajis.index', compact('posts'));
        //return view('slipgajis.index', [
          //  'users' => DB::table('posts')->paginate(15)
        //]);
    }

    public function destroy(): RedirectResponse
    {


        //koment
        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}
