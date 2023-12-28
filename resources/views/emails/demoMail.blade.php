<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        table{
        width: 100%;
        border-collapse:collapse;
        border: 1px solid black;
        }
        table td{line-height:25px;padding-left:15px;}
        table th{background-color:#fbc403; color:#363636;}
        </style>

    </head>
    <body>
        <table border="1">
            <tr height="100px" style="background-color:#363636;color:#ffffff;text-align:center;font-size:24px; font-weight:600;">
                <td colspan='4'>SLIP GAJI</td>
            </tr>
            <tr>
                <th>Nama:</th>
                <td>{{ $mailData['nama'] }}</td>
                <th></th>
                <td></td>
            </tr>
        <!-----2 row--->
            <tr>
                <th>Perusahaan</th>
                <td>{{ $mailData['perusahaan'] }}</td>
                <th>Periode</th>
                <td>{{ $mailData['Periode'] }}</td>
            </tr>

        </table>
            <tr></tr>
            <br/>
        <table border="1">
            <tr>
                <th >DATA</th>
                <th>Amount</th>

            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>{{ $mailData['gapok'] }}</td>

            </tr>
            <tr>
                <td>Gaji Pokok/hr</td>
                <td>{{ $mailData['gapokhr'] }}</td>

            </tr>
            <tr>
                <td>Uang Makan/hr</td>
                <td>{{ $mailData['umaperhr'] }}</td>

            </tr>
            <tr>
                <td>Uang Tranport/hr</td>
                <td>{{ $mailData['utrperhr'] }}</td>
            </tr>
            <tr>
                <td>Hari kerja</td>
                <td>{{ $mailData['hrkerja'] }}</td>
            </tr>
            <tr>
                <td>Lembur 1</td>
                <td>{{ $mailData['lembur1'] }}</td>
            </tr>
            <tr>
                <td>Lembur 2</td>
                <td>{{ $mailData['lembur2'] }}</td>
            </tr>

            <tr>
                <th>PENDAPATAN</th>
                <th>Amount</th>
                <th>PENDAPATAN</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>{{ $mailData['gapok'] }}</td>
                <td>Insentif Target : {{ $mailData['freetepe1'] }}</td>
                <td>{{ $mailData['nomfreetepe1'] }}</td>
            </tr>
            <tr>
                <td>Uang Makan</td>
                <td>{{ $mailData['uma'] }}</td>
                <td>Insentif Target : {{ $mailData['freetepe2'] }}</td>
                <td>{{ $mailData['nomfreetepe2'] }}</td>
            </tr>
            <tr>
                <td>Uang Transport</td>
                <td>{{ $mailData['utransport'] }}</td>
                <td>Insentif Target : {{ $mailData['freetepe3'] }}</td>
                <td>{{ $mailData['nomfreetepe3'] }}</td>
            </tr>
            <tr>
                <td>Tunjangan Kehadiran</td>
                <td>{{ $mailData['tunkeh'] }}</td>
                <td>Insentif Target : {{ $mailData['freetepe4'] }}</td>
                <td>{{ $mailData['nomfreetepe4'] }}</td>
            </tr>
            <tr>
                <td>Tunjangan Lainnya</td>
                <td>{{ $mailData['tunlainnya'] }}</td>
                <td>Insentif Target : {{ $mailData['freetepe5'] }}</td>
                <td>{{ $mailData['nomfreetepe5'] }}</td>
            </tr>
            <tr>
                <td>Uang Lembur</td>
                <td>{{ $mailData['ulembur'] }}</td>
                <td>Insentif Target : {{ $mailData['freetepe6'] }}</td>
                <td>{{ $mailData['nomfreetepe6'] }}</td>
            </tr>


            <tr>
                <td></td>
                <td><strong>TOTAL PENDAPATAN</strong></td>
                <td><strong>{{ $mailData['totalpen'] }}</strong></td>
                <td></td>
            </tr>
            <tr>
                <th>POTONGAN</th>
                <th>Amount</th>
                <th>POTONGAN</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>BPJS TK</td>
                <td>{{ $mailData['bpjstk'] }}</td>
                <td>Pinjaman</td>
                <td>{{ $mailData['pinjaman'] }}</td>
            </tr>
            <tr>
                <td>BPJS KS</td>
                <td>{{ $mailData['bpjsks'] }}</td>
                <td>Unpaid/Leave</td>
                <td>{{ $mailData['potunle'] }}</td>
            </tr>
            <tr>
                <td>PPH 21</td>
                <td>{{ $mailData['pph21'] }}</td>
                <td>Terlambat</td>
                <td>{{ $mailData['terlambat'] }}</td>
            </tr>
            <tr>
                <td>Potongan 1 : {{ $mailData['freetepo1'] }}</td>
                <td>{{ $mailData['nomfreetepo1'] }}</td>
                <td>Potongan 2 : {{ $mailData['freetepo2'] }}</td>
                <td>{{ $mailData['nomfreetepo2'] }}</td>
            </tr>
            <tr>
                <td></td>
                <td><strong>TOTAL POTONGAN</strong></td>
                <td><strong>{{ $mailData['totalpot'] }}</strong></td>
                <td></td>
            </tr>
            <tr>

                <th colspan="2" ><strong>TOTAL TERIMA</strong></th>
                <th colspan="2" ><strong>{{ $mailData['total'] }}</strong></th>

            </tr>
        </table>
    </body>
</html>
