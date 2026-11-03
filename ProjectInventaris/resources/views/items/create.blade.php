<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulir barang</title>
</head>
<body>
    <h2>Formulir Tambah barang Inventaris Kantor</h2>

    {{--panggil kondisi bawa laravel jika data berhasil disimpan muncul--}}
    @if(session('success'))
         <div>{{session('success')}}
    @endif

         {{--formulir mengarah ke raute store milik item--}}
         <form action="{{ route('items.store')}}" method="POST">
            @csrf {{--wajib ada di form laravel--}}

            <label>kode barang:</label>
            <input type="text" name="code" required placeholder="Contoh: inv-001">
            <br>

            <label>Nama Barang:</label>
            <input type="text" name="item_name" required placeholder="Contoh: Laptop">
            <br>

            <label>Kategory:</label>
            <input type="text" name="category" required
            placeholder="Contoh: Elektronik">
            <br>

            <label>Stok</label>
            <input type="number" name="stock" requred value="1">
            <br>

            <label>Kondisi</label>
            <select name="condition">
                <option value="baik">Baik</option>
                <option value="rusak ringan">Rusak Ringan</option>
                <option value="rusak parah">Rusak Parah</option>
            </select>
            <br>

            <label>Lokasi Ruangan:</label>
            <input type="text" name="room_location" placeholder="Contoh: Ruang IT">
            <br>

            <button type="submit">Simpan Barang</button>
    </form>

</body>
</html>