<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Slipgaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'idxsg',
        'periode',
        'kode',
        'nama',
        'perusahaan',
        'email',
        'gapok',
    ];

    //ini adlh default primary key, yaitu id, jk primary key dlm tabel selain id,
    //maka hrs d tulis sprti d bawah ini, idxsg adlh prmary key nya.
    //hrs d statiskan jk field(kolom) primary key nya bukan id
    protected $primaryKey = 'idxsg';

    public function tgapok()
    {

        $vreal    = "";
		$lvalue1  = substr($this->gapok,0,1);
		$vrand1   = substr($this->gapok,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->gapok,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->gapok,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->gapok,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tgapok=intval($nvalue);
        return (
            $tgapok
        ) ;
    }

    public function tgapokhr()
    {

        $vreal    = "";
		$lvalue1  = substr($this->gapokhr,0,1);
		$vrand1   = substr($this->gapokhr,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->gapokhr,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->gapokhr,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->gapokhr,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tgapokhr=intval($nvalue);
        return (
            $tgapokhr
        ) ;
    }
    public function tumaperhr()
    {

        $vreal    = "";
		$lvalue1  = substr($this->umaperhr,0,1);
		$vrand1   = substr($this->umaperhr,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->umaperhr,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->umaperhr,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->umaperhr,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tumaperhr=intval($nvalue);
        return (
            $tumaperhr
        ) ;
    }
    public function tutrperhr()
    {

        $vreal    = "";
		$lvalue1  = substr($this->utrperhr,0,1);
		$vrand1   = substr($this->utrperhr,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->utrperhr,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->utrperhr,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->utrperhr,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tutrperhr=intval($nvalue);
        return (
            $tutrperhr
        ) ;
    }
    public function thrkerja()
    {

        $vreal    = "";
		$lvalue1  = substr($this->hrkerja,0,1);
		$vrand1   = substr($this->hrkerja,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->hrkerja,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->hrkerja,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->hrkerja,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $thrkerja=intval($nvalue);
        return (
            $thrkerja
        ) ;
    }
    public function tlembur1()
    {

        $vreal    = "";
		$lvalue1  = substr($this->lembur1,0,1);
		$vrand1   = substr($this->lembur1,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->lembur1,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->lembur1,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->lembur1,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tlembur1=intval($nvalue);
        return (
            $tlembur1
        ) ;
    }
    public function tuma()
    {

        $vreal    = "";
		$lvalue1  = substr($this->uma,0,1);
		$vrand1   = substr($this->uma,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->uma,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->uma,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->uma,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tuma=intval($nvalue);
        return (
            $tuma
        ) ;
    }
    public function tutransport()
    {

        $vreal    = "";
		$lvalue1  = substr($this->utransport,0,1);
		$vrand1   = substr($this->utransport,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->utransport,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->utransport,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->utransport,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tutransport=intval($nvalue);
        return (
            $tutransport
        ) ;
    }

    public function ttunkeh()
    {

        $vreal    = "";
		$lvalue1  = substr($this->tunkeh,0,1);
		$vrand1   = substr($this->tunkeh,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->tunkeh,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->tunkeh,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->tunkeh,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $ttunkeh=intval($nvalue);
        return (
            $ttunkeh
        ) ;
    }
    public function ttunlainnya()
    {

        $vreal    = "";
		$lvalue1  = substr($this->tunlainnya,0,1);
		$vrand1   = substr($this->tunlainnya,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->tunlainnya,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->tunlainnya,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->tunlainnya,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $ttunlainnya=intval($nvalue);
        return (
            $ttunlainnya
        ) ;
    }
    public function tulembur()
    {

        $vreal    = "";
		$lvalue1  = substr($this->ulembur,0,1);
		$vrand1   = substr($this->ulembur,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->ulembur,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->ulembur,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->ulembur,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tulembur=intval($nvalue);
        return (
            $tulembur
        ) ;
    }
    public function tnomfreetepe1()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepe1,0,1);
		$vrand1   = substr($this->nomfreetepe1,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepe1,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepe1,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepe1,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepe1=intval($nvalue);
        return (
            $tnomfreetepe1
        ) ;
    }
    public function tnomfreetepe2()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepe2,0,1);
		$vrand1   = substr($this->nomfreetepe2,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepe2,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepe2,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepe2,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepe2=intval($nvalue);
        return (
            $tnomfreetepe2
        ) ;
    }
    public function tnomfreetepe3()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepe3,0,1);
		$vrand1   = substr($this->nomfreetepe3,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepe3,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepe3,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepe3,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepe3=intval($nvalue);
        return (
            $tnomfreetepe3
        ) ;
    }
    public function tnomfreetepe4()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepe4,0,1);
		$vrand1   = substr($this->nomfreetepe4,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepe4,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepe4,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepe4,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepe4=intval($nvalue);
        return (
            $tnomfreetepe4
        ) ;
    }
    public function tnomfreetepe5()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepe5,0,1);
		$vrand1   = substr($this->nomfreetepe5,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepe5,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepe5,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepe5,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepe5=intval($nvalue);
        return (
            $tnomfreetepe5
        ) ;
    }
    public function tnomfreetepe6()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepe6,0,1);
		$vrand1   = substr($this->nomfreetepe6,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepe6,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepe6,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepe6,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepe6=intval($nvalue);
        return (
            $tnomfreetepe6
        ) ;
    }
    public function tbpjstk()
    {

        $vreal    = "";
		$lvalue1  = substr($this->bpjstk,0,1);
		$vrand1   = substr($this->bpjstk,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->bpjstk,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->bpjstk,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->bpjstk,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tbpjstk=intval($nvalue);
        return (
            $tbpjstk
        ) ;
    }
    public function tbpjsks()
    {

        $vreal    = "";
		$lvalue1  = substr($this->bpjsks,0,1);
		$vrand1   = substr($this->bpjsks,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->bpjsks,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->bpjsks,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->bpjsks,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tbpjsks=intval($nvalue);
        return (
            $tbpjsks
        ) ;
    }
    public function tpph21()
    {

        $vreal    = "";
		$lvalue1  = substr($this->pph21,0,1);
		$vrand1   = substr($this->pph21,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->pph21,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->pph21,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->pph21,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tpph21=intval($nvalue);
        return (
            $tpph21
        ) ;
    }
    public function tpinjaman()
    {

        $vreal    = "";
		$lvalue1  = substr($this->pinjaman,0,1);
		$vrand1   = substr($this->pinjaman,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->pinjaman,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->pinjaman,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->pinjaman,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tpinjaman=intval($nvalue);
        return (
            $tpinjaman
        ) ;
    }
    public function tpotunle()
    {

        $vreal    = "";
		$lvalue1  = substr($this->potunle,0,1);
		$vrand1   = substr($this->potunle,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->potunle,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->potunle,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->potunle,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tpotunle=intval($nvalue);
        return (
            $tpotunle
        ) ;
    }
    public function tterlambat()
    {

        $vreal    = "";
		$lvalue1  = substr($this->terlambat,0,1);
		$vrand1   = substr($this->terlambat,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->terlambat,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->terlambat,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->terlambat,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tterlambat=intval($nvalue);
        return (
            $tterlambat
        ) ;
    }
    public function tnomfreetepo1()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepo1,0,1);
		$vrand1   = substr($this->nomfreetepo1,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepo1,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepo1,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepo1,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepo1=intval($nvalue);
        return (
            $tnomfreetepo1
        ) ;
    }
    public function tnomfreetepo2()
    {

        $vreal    = "";
		$lvalue1  = substr($this->nomfreetepo2,0,1);
		$vrand1   = substr($this->nomfreetepo2,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->nomfreetepo2,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->nomfreetepo2,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->nomfreetepo2,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $tnomfreetepo2=intval($nvalue);
        return (
            $tnomfreetepo2
        ) ;
    }
    public function ttotal()
    {

        $vreal    = "";
		$lvalue1  = substr($this->total,0,1);
		$vrand1   = substr($this->total,1,$lvalue1);
		$vtemp1   = $lvalue1+1;
		$lvaluev  = intval(substr($this->total,$vtemp1,1));
		$vtemp2   = $vtemp1+1;
		$vencript = substr($this->total,$vtemp2,$lvaluev);
		$vtemp3   = $vtemp2+$lvaluev;
		$vresult  = substr($this->total,$vtemp3,$lvaluev);
		for ($counter=0;$counter<=$lvaluev-1;$counter++)
			{
			$var1  = intval(substr($vencript,$counter,1));
			$var2  = intval(substr($vresult,$counter,1));
			$var3  = $var2-$var1;
			$vreal = $vreal.$var3;
			}
		$nvalue = $vreal;
        $ttotal=intval($nvalue);
        return (
            $ttotal
        ) ;
    }
}
