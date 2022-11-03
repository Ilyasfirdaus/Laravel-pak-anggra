@extends('layout')
@section('content')
    


<a href="#" onclick="ModalTambahProfile()"  class="btn btn-success"> + Add New Data</a>

<table class=" table-bordered table-dark table-hover" width="1000px">
    <tr>
        <th>Kode Profile</th>
        <th>Nama Profile</th>
        <th> Opsi</th>
    </tr>
    @foreach($profile as $Get)
    <tr>
        <td>{{ $Get->kd_profile }}</td>
        <td>{{ $Get->nama_profile}}</td>
        <td>
            <a href="/controller/edit/{{ $Get->kd_profile}}" class="btn btn-success">Udpate</a>
            <a href="/controller/hapus/{{ $Get->kd_profile }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Form Modal Tambah Berita -->
<form action="profile/tambah" method="post">
    @csrf
<div class="modal fade" id="ModalTambahProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Profile</label>
                <input type="text" class="form-control" name="kd_profile" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Profile</label>
                <textarea name="nama_profile" class="form-control" required></textarea>
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

<!-- Form Modal Tambah Profile -->


<script>

    // Modal Tambah Profile
    function ModalTambahProfile () {
           $('#ModalTambahProfile').modal('show');
       }
    // Modal Tambah Profile
   

          
   </script>






@endsection