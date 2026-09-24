<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah ToDo</title>
</head>
<body>

    <h1>Tambah ToDo</h1>

    <form action="/todos" method="POST">

        @csrf

        <div>
            <label>Judul ToDo</label>
            <br>
            <input
                type="text"
                name="judul"
                placeholder="Tulis judul tugas..."
                required
            >
        </div>

        <br>

        <div>
            <label>Keterangan</label>
            <br>
            <textarea
                name="keterangan"
                placeholder="Tulis keterangan..."
            ></textarea>
        </div>

        <br>

        <div>
            <input type="checkbox" name="selesai">
            <label>Selesai</label>
        </div>

        <br>

        <div>
            <input type="checkbox" name="prioritas">
            <label>Prioritas</label>
        </div>

        <br>

        <button type="submit">Simpan ToDo</button>

    </form>

    <br>

    <a href="/">← Kembali</a>

</body>
</html>