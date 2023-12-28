




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
                    <hr>
                </div>

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">

                        <table class="table table-bordered ">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gapok</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="col">{{ $mailData['nama'] }}</th>
                                    <th scope="col">{{ $mailData['kode'] }}</th>
                                    <th scope="col">{{ $mailData['perusahaan'] }}</th>
                                    <th scope="col">{{ $mailData['nomorhp'] }}</th>
                                    <th scope="col">{{ $mailData['gapok'] }}</th>
                                 </tr>


                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
