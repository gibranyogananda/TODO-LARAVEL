<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>

    <h1>To-Do List</h1>

    <a href="#">+ Tambah ToDo</a>

    <hr>

    @if ($todos->count() > 0)

        @foreach ($todos as $todo)

            <div>
                <h3>{{ $todo->judul }}</h3>

                <p>{{ $todo->keterangan }}</p>

                @if ($todo->selesai)
                    <p>Selesai</p>
                @else
                    <p>Belum selesai</p>
                @endif
            </div>

            <hr>

        @endforeach

    @else

        <p>Belum ada ToDo.</p>

    @endif

</body>
</html>