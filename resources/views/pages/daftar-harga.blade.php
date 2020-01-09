@extends('layouts.app')

@section('title', '| Daftar Harga')

@section('content')
    <div class="container mt-3">
        <h2>Daftar Harga Suzuki OTR Bandung</h2>

        <a href="{{ asset('images/price-list.png') }}">
            <img src="{{ asset('images/price-list.png') }}" class="img-fluid" alt="">
        </a>

        <p class="mt-5" style="margin-bottom:151px">
            Untuk info & Pemesanan, silahkan klik tombol whatsapp untuk menghubungi marketing kami atau bisa hubungi manual: 
            <br>
            <a class="" href="javascript:void(0);" onclick="whatstappMe()">
                <i class="fa fa-whatsapp"></i> +62 822-1653-8309 a/n Acef Arif Rahman
            </a>
        </p>
    </div>
@endsection