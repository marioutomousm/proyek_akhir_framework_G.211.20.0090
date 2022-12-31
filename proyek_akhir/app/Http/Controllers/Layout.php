<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangMasuk;
use App\Models\barangKeluar;


class Layout extends Controller
{
    public function index(){

        // $barangMasuk = barangMasuk::count();
        // $barangKeluar = barangKeluar::count();
    //    return view ('layout.main', compact('barangMasuk','barangKeluar'));

       return view ('layout.main');


    }

    public function home()
    {



        $barangMasuk    = barangMasuk::count();
        $barangKeluar   = barangKeluar::count();

        $barangMasuk_jan    =   barangMasuk::whereMonth('tanggal_masuk','01')->count();
        $barangMasuk_feb    =   barangMasuk::whereMonth('tanggal_masuk','02')->count();
        $barangMasuk_mar    =   barangMasuk::whereMonth('tanggal_masuk','03')->count();
        $barangMasuk_apr    =   barangMasuk::whereMonth('tanggal_masuk','04')->count();
        $barangMasuk_mei    =   barangMasuk::whereMonth('tanggal_masuk','05')->count();
        $barangMasuk_jun    =   barangMasuk::whereMonth('tanggal_masuk','06')->count();
        $barangMasuk_jul    =   barangMasuk::whereMonth('tanggal_masuk','07')->count();
        $barangMasuk_ags    =   barangMasuk::whereMonth('tanggal_masuk','08')->count();
        $barangMasuk_sep    =   barangMasuk::whereMonth('tanggal_masuk','09')->count();
        $barangMasuk_okt    =   barangMasuk::whereMonth('tanggal_masuk','10')->count();
        $barangMasuk_nov    =   barangMasuk::whereMonth('tanggal_masuk','11')->count();
        $barangMasuk_des    =   barangMasuk::whereMonth('tanggal_masuk','12')->count();

        $barangKeluar_jan    =   barangKeluar::whereMonth('tanggal_keluar','01')->count();
        $barangKeluar_feb    =   barangKeluar::whereMonth('tanggal_keluar','02')->count();
        $barangKeluar_mar    =   barangKeluar::whereMonth('tanggal_keluar','03')->count();
        $barangKeluar_apr    =   barangKeluar::whereMonth('tanggal_keluar','04')->count();
        $barangKeluar_mei    =   barangKeluar::whereMonth('tanggal_keluar','05')->count();
        $barangKeluar_jun    =   barangKeluar::whereMonth('tanggal_keluar','06')->count();
        $barangKeluar_jul    =   barangKeluar::whereMonth('tanggal_keluar','07')->count();
        $barangKeluar_ags    =   barangKeluar::whereMonth('tanggal_keluar','08')->count();
        $barangKeluar_sep    =   barangKeluar::whereMonth('tanggal_keluar','09')->count();
        $barangKeluar_okt    =   barangKeluar::whereMonth('tanggal_keluar','10')->count();
        $barangKeluar_nov    =   barangKeluar::whereMonth('tanggal_keluar','11')->count();
        $barangKeluar_des    =   barangKeluar::whereMonth('tanggal_keluar','12')->count();




       return view ('layout.home',
       compact(
        'barangMasuk',
        'barangKeluar',

        'barangMasuk_jan',
        'barangMasuk_feb',
        'barangMasuk_mar',
        'barangMasuk_apr',
        'barangMasuk_mei',
        'barangMasuk_jun',
        'barangMasuk_jul',
        'barangMasuk_ags',
        'barangMasuk_sep',
        'barangMasuk_okt',
        'barangMasuk_nov',
        'barangMasuk_des',

        'barangKeluar_jan',
        'barangKeluar_feb',
        'barangKeluar_mar',
        'barangKeluar_apr',
        'barangKeluar_mei',
        'barangKeluar_jun',
        'barangKeluar_jul',
        'barangKeluar_ags',
        'barangKeluar_sep',
        'barangKeluar_okt',
        'barangKeluar_nov',
        'barangKeluar_des'
    ));



        // return view ('layout.home');
     }

     public function toko(){
        return view ('toko.daftarToko');
     }

}
