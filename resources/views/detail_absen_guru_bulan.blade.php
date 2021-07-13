@extends('layouts.app')
@section('content')






<div class="container-xl  mt-5">

    <?php
    echo $ambil->user_id;
    ?>

    {{$ambil->user_id}}




    <form class="form-inline" method="get" action="/search_gaji">
        <input class="form-control mr-sm-2" type="search" placeholder="Bulan" aria-label="Search" name="bulan">
        <input class="form-control mr-sm-2" type="search" placeholder="Tahun" aria-label="Search" name="tahun">
        <input type="hidden" name="user_id" value="{{$ambil->user_id}}">
        <button class="btn btn btn-primary my-2 my-sm-0" type="submit">Cari Absen</button>
    </form>
    <table class="table table-striped table-hover">

        <h2>Detail Absen</h2>
        <thead class="btn-warning" style="color: white;">
            <tr>
                <th style="vertical-align: middle;" scope="col">Tanggal</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Materi Ajar</th>
                <th style="vertical-align: middle;" scope="col">Alamat</th>
                <th scope="col">Jenjang Siswa</th>
                <th scope="col">Metode Les</th>
                <th scope="col">Status Les</th>
                <th style="vertical-align: middle;" scope="col">Fee</th>

            </tr>
        </thead>
        <tbody>
            @foreach($riwayats as $riwayat)
            <tr>
                <td>{{$riwayat->created_at}}</td>
                <td>{{$riwayat->author['nama']}}</td>
                <td>{{$riwayat->nama_siswa}}</td>
                <td>{{$riwayat->mata_pelajaran}}</td>
                <td>{{$riwayat->materi_ajar}}</td>
                <td>{{$riwayat->alamat_siswa}}</td>
                <td>{{$riwayat->kategori->jenjang_siswa}}</td>
                <td>{{$riwayat->metode_les}}</td>
                <td>{{$riwayat->kategori->status_les}}</td>
                <td> Rp. {{number_format($riwayat->kategori->fee, 0, ',', '.')}}</td>

                <!-- <td>{{$riwayat->foto_}}</td> -->

            </tr>


            @endforeach
        </tbody>
        <tr style="background-color:#FFC107;">
            <td colspan="8">Total Gaji</td>
            <td colspan="2" style="text-align: right;">
                Rp. {{number_format($jumlah, 0, ',', '.')}}
            </td>
        </tr>
    </table>











    @endsection