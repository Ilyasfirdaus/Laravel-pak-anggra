@extends('layout')
@section('content')
    


<a href="#" onclick="ModalTambahBerita()"  class="btn btn-success"> + Add New Data</a>

<table class=" table-bordered table-dark table-hover" width="1000px">
    <tr>
        <th>Kode Berita</th>
        <th>Nama berita</th>
        <th> Opsi</th>
    </tr>
    @foreach($berita as $Get)
    <tr>
        <td>{{ $Get->kd_berita }}</td>
        <td>{{ $Get->nama_berita }}</td>
        <td>
            <a href="/controller/edit/{{ $Get->kd_berita}}" class="btn btn-success">Udpate</a>
            <a href="#" onclick="ModalHapusBerita({{ $Get->kd_berita }})" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Berita -->
<form action="berita/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_berita" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <textarea name="nama_berita" class="form-control" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>

<!-- Form Modal Hapus Berita-->
<form action="berita/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="kd_berita">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>


<script>

    // Modal Tambah Berita
    function ModalTambahBerita () {
           $('#ModalTambahBerita').modal('show');
       }
       function ModalHapusBerita ($id) {
            $('[name="kd_berita"]').val($id);
           $('#ModalHapusBerita').modal('show');
       }

          
   </script>






@endsection