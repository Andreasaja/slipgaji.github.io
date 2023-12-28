


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
                    <h3 class="text-center my-4">coba listview</h3>
                    {{-- <h5 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h5> --}}
                    <hr>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">

                        <table class="table table-bordered ">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gapok</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">{{ ($posts->currentPage() - 1)  * $posts->links()->paginator->perPage() + $loop->iteration }}</td>
                                    <?php $number++; ?>
                                    {{-- <td class="text-center"></td> --}}
                                        {{-- <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px"> --}}
                                        {{-- <td>{{ $number }}</td> --}}

                                    <td>{{ $post->periode }}</td>
                                    <td>{{ $post->kode }}</td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->perusahaan }}</td>
                                    <td>{{ $post->email }}</td>
                                    <td>

                                        {!! $post->gapok !!}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                            {{-- <a href="{{ route('send-mail.index', $post->idxsg) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                            {{-- <a href="{{ route('slipgajinya.destroy', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a> --}}
                                            <a href="{{ route('send-mail.show', $post->nama) }}" class="btn btn-sm btn-dark">SHOW</a>

                                            <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
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

                          {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}

                        {{-- -------------------- --}}
                    </div>
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
