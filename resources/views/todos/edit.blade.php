<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit ToDo</title>
</head>
<body>

    <h1>Edit ToDo</h1>

    <form action="/todos/{{ $todo->id }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Judul ToDo</label>
            <br>

            <input
                type="text"
                name="judul"
                value="{{ $todo->judul }}"
                required
            >
        </div>

        <br>

        <div>
            <label>Keterangan</label>
            <br>

            <textarea
                name="keterangan"
            >{{ $todo->keterangan }}</textarea>
        </div>

        <br>

        <div>
            <input
                type="checkbox"
                name="selesai"
                {{ $todo->selesai ? 'checked' : '' }}
            >

            <label>Selesai</label>
        </div>

        <br>

        <div>
            <input
                type="checkbox"
                name="prioritas"
                {{ $todo->prioritas ? 'checked' : '' }}
            >

            <label>Prioritas</label>
        </div>

        <br>

        <button type="submit">Simpan Perubahan</button>

    </form>

    <br>

    <a href="/">← Kembali</a>

</body>
</html>