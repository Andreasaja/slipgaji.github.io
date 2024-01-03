<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
use App\Models\SlipGaji;
use Illuminate\View\View;

class MailController extends Controller
{
    //berhasil kirim email,versi awal
    public function index(): View
    {
        $posts = SlipGaji::latest()->paginate(10);
        $mailData = [
            'title' => 'ini header dari konten',
            'body' =>  'harusnya ini awalan dr body'

        ];

        Mail::to('under.block22@gmail.com')->send(new DemoMail($mailData));

        //dd("Email is sent successfully.");
         //render view with posts
         return view('slipgajis.index', compact('posts'));
        //return back();



    }


    public function show(int $idxsg)
    {
        //get post by ID
        $postnya = SlipGaji::findOrFail($idxsg);



        $mailData = [
            'nama' => $postnya->nama,
            'kode' => $postnya->kode,
            'Periode' => $postnya->periode,
            'perusahaan' => $postnya->perusahaan,
            'nomorhp' => $postnya->nomorhp,
            'gapok' => number_format($postnya->tgapok()),
            'gapokhr' => number_format($postnya->tgapokhr()),
            'umaperhr' => number_format($postnya->tumaperhr()),
            'utrperhr' => number_format($postnya->tutrperhr()),
            'hrkerja' => number_format($postnya->thrkerja()),
            'lembur1' => number_format($postnya->tlembur1()),
            'lembur2' => $postnya->lembur2,
            'uma' => number_format($postnya->tuma()),
            'utransport' => number_format($postnya->tutransport()),
            'tunkeh' => number_format($postnya->ttunkeh()),
            'tunlainnya' => number_format($postnya->ttunlainnya()),
            'ulembur' => number_format($postnya->tulembur()),
            'freetepe1' => $postnya->freetepe1,
            'nomfreetepe1' => number_format($postnya->tnomfreetepe1()),
            'freetepe2' => $postnya->freetepe2,
            'nomfreetepe2' => number_format($postnya->tnomfreetepe2()),
            'freetepe3' => $postnya->freetepe3,
            'nomfreetepe3' => number_format($postnya->tnomfreetepe3()),
            'freetepe4' => $postnya->freetepe4,
            'nomfreetepe4' => number_format($postnya->tnomfreetepe4()),
            'freetepe5' => $postnya->freetepe5,
            'nomfreetepe5' =>  number_format($postnya->tnomfreetepe5()),
            'freetepe6' => $postnya->freetepe6,
            'nomfreetepe6' => number_format($postnya->tnomfreetepe6()),
            'totalpen' => number_format($postnya->tgapok()+$postnya->tuma()
            +$postnya->tutransport()+$postnya->ttunkeh()+$postnya->ttunlainnya()
            +$postnya->tulembur()+$postnya->tnomfreetepe1()+$postnya->tnomfreetepe2()
            +$postnya->tnomfreetepe3()+$postnya->tnomfreetepe4()+$postnya->tnomfreetepe5()
            +$postnya->tnomfreetepe5()+$postnya->tnomfreetepe6()),


            'bpjstk' => number_format($postnya->tbpjstk()),
            'bpjsks' => number_format($postnya->tbpjsks()),
            'pph21' => number_format($postnya->tpph21()),
            'pinjaman' => number_format($postnya->tpinjaman()),
            'potunle' => number_format($postnya->tpotunle()),
            'terlambat' => number_format($postnya->tterlambat()),
            'freetepo1' => $postnya->freetepo1,
            'nomfreetepo1' => number_format($postnya->tnomfreetepo1()),
            'freetepo2' => $postnya->freetepo2,
            'nomfreetepo2' => number_format($postnya->tnomfreetepo2()),
            'totalpot' => number_format($postnya->tbpjstk()+$postnya->tbpjsks()
            +$postnya->tpph21()+$postnya->tpinjaman()+$postnya->tpotunle()
            +$postnya->tterlambat()+$postnya->tnomfreetepo1()+$postnya->tnomfreetepo2()),
            'email' => $postnya->email,

            'total' => number_format($postnya->ttotal())




        ];
        //Mail::to('under.block22@gmail.com')->send(new DemoMail($mailData));
        Mail::to($mailData['email'])->send(new DemoMail($mailData));

        //render view with post
        //return view('slipgajis.index', compact('post'));
        //return view('slipgajis.index', compact('postnya'));
        return back()->with(['success' => 'Email Berhasil Terkirim ke '.$mailData['nama']]);
    }

    public function sendEmail($nama)
    {
        $mailData = [
            'title' => 'ini header dari konten',
            'body' =>  'harusnya ini awalan dr body'

        ];
        $email = SlipGaji::find($nama)->email;
        Mail::to($email)->send(new DemoMail($mailData));
        return back();
    }

}
