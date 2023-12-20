@extends('layout.output')
@section('content')
<style>
        h3 {
                color: black; font-size: 25px; text-align: center;
        }
        form {
                background-color: cadetblue; text-align: left; font-size: 20px; width: auto; height: auto; margin: 50px; padding: 30px;
         input {width: 95%; padding: 15px; margin: 15px; box-sizing: content-box;}
         select {margin: 15px; width: 98%; padding: 15px; border: none; border-radius: 4px; background-color: #f1f1f1;}
         button {background-color: #04AA6D; border: none; color: white; padding: 15px; text-decoration: none; margin: 15px; cursor: pointer; font-size: 20px;}
        }
        a {
                background-color: #04AA6D; border: none; color: white; padding: 15px; text-decoration: none; margin: 15px; cursor: pointer; font-size: 20px;
        }
        p {
                color: black; font-size: 25px; text-align: center; width: auto; display: block; padding: 0;}
</style>
<h3>INPUT DATA PEMESANAN TIKET KONSER NCT DREAM</h3>
<p>Silahkan Edit Data Anda dengan Sebenar-benarnya.</p>
<form method="POST" action="{{'/uas/'.$data->Nama}}">
    @csrf
    @method('put')
<div class="mb-3">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Tambahkan Nama" value="{{Session::get('Nama')}}">
</div>
<div class="mb-3">
        <label for="No_HP" class="form-label">No HP:</label>
        <input type="number" name="No_HP" id="No_HP" class="form-control" placeholder="Masukan No HP" value="{{Session::get('No_HP')}}">
</div>
<div class="mb-3">
        <label for="Alamat" class="form-label">Alamat:</label>
        <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Tambahkan Alamat" value="{{Session::get('Alamat')}}">
</div>
<div class="mb-3">
        <label for="Jenis_Tiket" class="form-label">Jenis Tiket:</label>
        <select name="Jenis_Tiket" id="Jenis_Tiket" class="form-control" placeholder="Jenis_Tiket" value="{{Session::get('Jenis_Tiket')}}">
        <option value="VIP">VIP</option>
        <option value="Regular">Regular</option>
        </select>
</div>
<div class="mb-3">
        <label for="Harga" class="form-label">Harga:</label>
        <input type="text" name="Harga" id="Harga" class="form-control" placeholder="Masukan Harga Tiket" value="{{Session::get('Harga')}}">
</div>
<div class="mb-3">
        <label for="Jumlah_Tiket" class="form-label">Jumlah Tiket:</label>
        <input type="number" name="Jumlah_Tiket" id="Jumlah_Tiket" class="form-control" placeholder="Masukan Jumlah Tiket" value="{{Session::get('Jumlah_Tiket')}}">
</div>
<div class="mb-3">
        <label for="Total_Harga" class="form-label">Total Harga:</label>
        <input type="text" name="Total_Harga" id="Total_Harga" class="form-control" placeholder="Total Harga Sesuai Banyaknya Tiket" value="{{Session::get('Total_Harga')}}">
</div>
<div class="mb-3">
    <button href="/uas">Submit</button> <a class="btn btn-secondry" href="/uas">Kembali</a>
</div>
</form>
@endsection
