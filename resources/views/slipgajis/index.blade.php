


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Daftar Slip Gaji</h3>
                    {{-- <h5 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h5> --}}
                    <hr>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body" class="md-card-content" style="overflow-x: auto;">

                        <table class="table table-bordered ">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kirim</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gaji Pokok</th>
                                <th scope="col">Gaji Pk./hr.</th>
                                <th scope="col">UM/hr.</th>
                                <th scope="col">UT/hr.</th>
                                <th scope="col">Hr.Krj.</th>
                                <th scope="col">Lemb.1</th>
                                <th scope="col">Lemb.2</th>
                                <th scope="col">UM</th>
                                <th scope="col">UT</th>
                                <th scope="col">TK</th>
                                <th scope="col">TL</th>
                                <th scope="col">UL</th>
                                <th scope="col">Free Text Pen.1</th>
                                <th scope="col">Nom FTPen.1</th>
                                <th scope="col">Free Text Pen.2</th>
                                <th scope="col">Nom FTPen.2</th>
                                <th scope="col">Free Text Pen.3</th>
                                <th scope="col">Nom FTPen.3</th>
                                <th scope="col">Free Text Pen.4</th>
                                <th scope="col">Nom FTPen.4</th>
                                <th scope="col">Free Text Pen.5</th>
                                <th scope="col">Nom FTPen.5</th>
                                <th scope="col">Free Text Pen.6</th>
                                <th scope="col">Nom FTPen.6</th>
                                <th scope="col">BPJS-TK</th>
                                <th scope="col">BPJS-KS</th>
                                <th scope="col">PPH 21</th>
                                <th scope="col">Pinjaman</th>
                                <th scope="col">Pot.Unp/Lev</th>
                                <th scope="col">Terlambat</th>
                                <th scope="col">Free Text Pot.1</th>
                                <th scope="col">Nom FTPot.1</th>
                                <th scope="col">Free Text Pot.2</th>
                                <th scope="col">Nom FTPot.2</th>
                                <th scope="col">Terima</th>


                              </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">{{ ($posts->currentPage() - 1)  * $posts->links()->paginator->perPage() + $loop->iteration }}</td>
                                    <?php $number++; ?>
                                    <td>
                                        <a href="{{ route('send-mail.show', $post->idxsg) }}" class="btn btn-sm btn-dark">Email</a>
                                    </td>
                                    <td>{{ $post->periode }}</td>
                                    <td>{{ $post->kode }}</td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->perusahaan }}</td>
                                    <td>{{ $post->email }}</td>
                                    <td>{{  number_format($post->tgapok())}}</td>
                                    <td>{{  number_format($post->tgapokhr())}}</td>
                                    <td>{{  number_format($post->tumaperhr())}}</td>
                                    <td>{{  number_format($post->tutrperhr())}}</td>
                                    <td>{{  number_format($post->thrkerja())}}</td>
                                    <td>{{  number_format($post->tlembur1())}}</td>
                                    <td>{{  $post->lembur2}}</td>
                                    <td>{{  number_format($post->tuma())}}</td>
                                    <td>{{  number_format($post->tutransport())}}</td>
                                    <td>{{  number_format($post->ttunkeh())}}</td>
                                    <td>{{  number_format($post->ttunlainnya())}}</td>
                                    <td>{{  number_format($post->tulembur())}}</td>
                                    <td>{{  $post->freetepe1}}</td>
                                    <td>{{  number_format($post->tnomfreetepe1())}}</td>
                                    <td>{{  $post->freetepe2}}</td>
                                    <td>{{  number_format($post->tnomfreetepe2())}}</td>
                                    <td>{{  $post->freetepe3}}</td>
                                    <td>{{  number_format($post->tnomfreetepe3())}}</td>
                                    <td>{{  $post->freetepe4}}</td>
                                    <td>{{  number_format($post->tnomfreetepe4())}}</td>
                                    <td>{{  $post->freetepe5}}</td>
                                    <td>{{  number_format($post->tnomfreetepe5())}}</td>
                                    <td>{{  $post->freetepe6}}</td>
                                    <td>{{  number_format($post->tnomfreetepe6())}}</td>
                                    <td>{{  number_format($post->tbpjstk())}}</td>
                                    <td>{{  number_format($post->tbpjsks())}}</td>
                                    <td>{{  number_format($post->tpph21())}}</td>
                                    <td>{{  number_format($post->tpinjaman())}}</td>
                                    <td>{{  number_format($post->tpotunle())}}</td>
                                    <td>{{  number_format($post->tterlambat())}}</td>
                                    <td>{{  $post->freetepo1}}</td>
                                    <td>{{  number_format($post->tnomfreetepo1())}}</td>
                                    <td>{{  $post->freetepo2}}</td>
                                    <td>{{  number_format($post->tnomfreetepo2())}}</td>
                                    <td>{{  number_format($post->ttotal())}}</td>



                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                            {{-- <a href="{{ route('send-mail.index', $post->idxsg) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                            {{-- <a href="{{ route('slipgajinya.destroy', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                            {{-- <a href="/send-email/{{$post->nama}}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                            <a href="{{ route('send-mail.show', $post->idxsg) }}" class="btn btn-sm btn-dark">Email</a>

                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>

                          {{-- pagenation nya --}}
                          {{-- {{ $posts->links() }} --}}
                          {{-- {!! $posts->withQueryString()->links() !!} --}}

                          {{-- {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!} --}}

                        {{-- -------------------- --}}
                    </div>
                    {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

</body>
</html>
