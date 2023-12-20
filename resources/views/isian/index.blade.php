@extends('layout.output')
@section('content')
<style>
        h2 {
                color: black; font-size: 25px; text-align: center;
        }
        button {
            background-color: darkolivegreen; border: none; color: white; padding: 15px; text-decoration: none; margin: 15px; cursor: pointer; font-size: 15px; box-sizing: border-box; padding-inline: 6px; padding-block: 6px;
        }
        a {
            background-color: #04AA6D; border: none; color: white; padding: 15px; text-decoration: none; margin: auto; cursor: pointer; font-size: 15px; padding-block: 6px;
        }
        table {
            background-color: DarkSeaGreen; text-align: center; font-size: 20px;
                width: auto; height: auto; margin: auto; padding: auto; border-collapse: collapse; 
        }
        thead {
            background-color: cadetblue;
        }
</style> 
<h2>DATA PEMESANAN TIKET KONSER NCT DREAM</h2>
<a href="/"> Tambah Data + </a>
<table class=table border="1pk solid black" cellpadding="12" cellspacing="2">
    <thead>
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Jenis Tiket</th>
            <th>Harga</th>
            <th>Jumlah Tiket</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama}}</td>
            <td>{{$item->No_HP}}</td>
            <td>{{$item->Alamat}}</td>
            <td>{{$item->Jenis_Tiket}}</td>
            <td>{{$item->Harga}}</td>
            <td>{{$item->Jumlah_Tiket}}</td>
            <td>{{$item->Total_Harga}}</td>
            <td>
                <a class="btn btn-waraning btn-sm" href="{{url('/uas/'.$item->Nama.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah Anda Yakin?')" class="d-inline" action="{{'/uas/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection