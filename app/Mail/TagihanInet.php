<?php

namespace App\Mail;

use App\customers;
use App\kecamatan;
use App\kelurahan;
use App\kota;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TagihanInet extends Mailable
{
    use Queueable, SerializesModels;

    public $bill;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bill)
    {
        //
        $this->bill = $bill;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // return $this->view('tagihan.email');
        $noid  = $this->bill->netid;
        $nopel = $this->bill->client; 
        $nama  = customers::where('cid',$nopel)->value('name');
        $name  = strtoupper($nama);
        $alamat= customers::where('cid',$nopel)->value('address');
        $notlpn= customers::where('cid',$nopel)->value('handphone');
        $almt_kelurahan = customers::where('cid',$nopel)->value('kelurahan');
        $almt_kecamatan = customers::where('cid',$nopel)->value('kecamatan');
        $almt_kota      = customers::where('cid',$nopel)->value('kota');
        $kelurahan      = kelurahan::where('id',$almt_kelurahan)->value('nama');
        $kecamatan      = kecamatan::where('id',$almt_kecamatan)->value('nama');
        $kota           = kota::where('id',$almt_kota)->value('nama');
        $almt           = ucwords($alamat)."-".$kelurahan."-".$kecamatan."-".$kota;
        $periode        = date('d-m-Y',strtotime($this->bill->period));
        $tagihan        = number_format($this->bill->bill,0,',','.');
        return $this->from('jeggong@gmail.com')->view('tagihan.email',['noid' => $noid, 'nopel' => $nopel, 'nama' => $name, 'alamat' => $almt, 'periode' => $periode, 'tagihan' => $tagihan, 'notlpn' => $notlpn]);
    }
}
