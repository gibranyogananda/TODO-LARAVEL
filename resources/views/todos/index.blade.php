<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>

    <h1>To-Do List</h1>

    <a href="/todos/create">+ Tambah ToDo</a>

    <hr>

    @if ($todos->count() > 0)

        @foreach ($todos as $todo)

            <div>

                <h3>{{ $todo->judul }}</h3>

                <p>{{ $todo->keterangan }}</p>

                @if ($todo->prioritas)
                    <p><strong>⭐ PRIORITAS</strong></p>
                @endif

                @if ($todo->selesai)

                    <p><strong>Selesai</strong></p>

                    @if ($todo->tanggal_selesai)
                        <p>
                            Selesai pada:
                            {{ $todo->tanggal_selesai }}
                        </p>
                    @endif

                @else

                    <p>Belum selesai</p>

                @endif

                <br>

                <!-- Tombol Edit -->
                <a href="/todos/{{ $todo->id }}/edit">
                    ✏️ Edit
                </a>

                &nbsp;

                <!-- Tombol Hapus -->
                <form
                    action="/todos/{{ $todo->id }}"
                    method="POST"
                    style="display: inline;"
                    onsubmit="return confirm('Yakin ingin menghapus ToDo ini?');"
                >

                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        🗑️ Hapus
                    </button>

                </form>

            </div>

            <hr>

        @endforeach

    @else

        <p>Belum ada ToDo.</p>

    @endif

</body>
</html>