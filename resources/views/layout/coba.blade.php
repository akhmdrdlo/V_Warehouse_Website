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



    <!-- Modal Hapus -->
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="HapusModal">Upss!!</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apa kamu yakin ingin menghapus Record No.{{$logs->id}} ?</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('hapus-form').submit();">Hapus</a>
              <form id="hapus-form" action="{{ route('log.destroy', $logs->id) }}" method="post" style="display: none;">
                @csrf
                @method('delete')
              </form>
            </div>
          </div>
        </div>
      </div>