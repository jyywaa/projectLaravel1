<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tambah Barang Inventaris</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #cbd5e1;
            --success-bg: #dcfce7;
            --success-text: #166534;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 550px;
            background: var(--card-bg);
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            margin-bottom: 24px;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-main);
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 12px;
        }

        .alert-success {
            background-color: var(--success-bg);
            color: var(--success-text);
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--text-main);
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 0.95rem;
            box-sizing: border-box;
            transition: border-color 0.2s, box-shadow 0.2s;
            background-color: #fff;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
        }

        button[type="submit"] {
            width: 100%;
            background-color: var(--primary);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: var(--primary-hover);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Formulir Tambah Barang Inventaris Kantor</h2>

        {{-- Perbaikan tag div session success yang sebelumnya kurang penutup --}}
        @if(session('success'))
             <div class="alert-success">
                 {{ session('success') }}
             </div>
        @endif

        <form action="{{ route('items.store') }}" method="POST">
            @csrf 

            <div class="form-group">
                <label>Kode Barang:</label>
                <input type="text" name="code" required placeholder="Contoh: inv-001">
            </div>

            <div class="form-group">
                <label>Nama Barang:</label>
                <input type="text" name="item_name" required placeholder="Contoh: Laptop">
            </div>

            <div class="form-group">
                <label>Kategori:</label>
                <input type="text" name="category" required placeholder="Contoh: Elektronik">
            </div>

            <div class="form-group">
                <label>Stok:</label>
                {{-- Memperbaiki atribut 'requred' yang typo menjadi 'required' --}}
                <input type="number" name="stock" required value="1" min="1">
            </div>

            <div class="form-group">
                <label>Kondisi:</label>
                <select name="condition">
                    <option value="baik">Baik</option>
                    <option value="rusak ringan">Rusak Ringan</option>
                    <option value="rusak parah">Rusak Parah</option>
                </select>
            </div>

            <div class="form-group">
                <label>Lokasi Ruangan:</label>
                <input type="text" name="room_location" placeholder="Contoh: Ruang IT">
            </div>

            <button type="submit">Simpan Barang</button>
        </form>
    </div>

</body>
</html>