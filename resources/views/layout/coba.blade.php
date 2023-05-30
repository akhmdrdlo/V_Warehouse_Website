<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Kalender</title>
    {!! $calendar->script() !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css" />
</head>
<body>
    <h1>Jadwal Kalender</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div>
        {!! $calendar->calendar() !!}
    </div>

    <div>
        <h2>Tambah Agenda Jadwal</h2>
        <form action="{{ route('calendar.store') }}" method="POST">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" name="judul" required>
            <br>
            <label for="tanggal">Tanggal Mulai:</label>
            <input type="date" name="tanggal" required>
            <br>
            <label for="habis">Tanggal Selesai:</label>
            <input type="date" name="habis" required>
            <br>
            <input type="submit" value="Tambahkan">
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
    {!! $calendar->script() !!}
</body>
</html>
