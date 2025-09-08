@extends('template.main')
@section('konten')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
    <p class="mb-4">CRUD Laravel</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Spesifikasi</th>
                            <th>Lokasi</th>
                            <th>Kondisi</th>
                            <th>Jumlah</th>
                            <th>Sumber Dana</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($barang as $row)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$row->id_barang}}</td>
                            <td>{{$row->nama_barang}}</td>
                            <td>{{$row->spesifikasi}}</td>
                            <td>{{$row->lokasi}}</td>
                            <td>
                                <span class="badge badge-<?php if($row->kondisi == 'baru') {echo 'primary';} else {echo 'danger';} ?> p-1">
                                    {{$row->kondisi}}
                                </span>
                            </td>
                            <td>{{$row->jumlah_barang}}</td>
                            <td>{{$row->sumber_dana}}</td>
                            <td>
                                <!-- <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ubahData" 
                                    data-id="{{$row->id}}"
                                    data-id-barang="{{$row->id_barang}}"
                                    data-nama-barang="{{$row->nama_barang}}"
                                    data-spesifikasi="{{$row->spesifikasi}}"
                                    data-lokasi="{{$row->lokasi}}"
                                    data-kondisi="{{$row->kondisi}}"
                                    data-jumlah-barang="{{$row->jumlah_barang}}"
                                    data-sumber-dana="{{$row->sumber_dana}}"
                                >Edit</button> -->
                                <form action="{{url('bloking/package/delete_bar')}}/{{$row->id}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('bloking/package/save_bar')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="id_barang" aria-describedby="id_barang" name="id_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" aria-describedby="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="spesifikasi">Spesifikasi</label>
                        <textarea class="form-control" id="spesifikasi" name="spesifikasi" style="min-height: 80px;max-height: 240px" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kondisi</label>
                        <select name="kondisi" id="kondisi" class="form-control" required>
                            <option value="" selected>Pilih</option>
                            <option value="baru">Baru</option>
                            <option value="bekas">Bekas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="sumber_dana">Sumber Dana</label>
                        <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" onclick="confirm('Apakah anda yakin ingin menyimpan?')">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ubahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('bloking/package/edit_bar')}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="id_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="id_barang" name="id_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="spesifikasi">Spesifikasi</label>
                        <textarea class="form-control" id="spesifikasi" name="spesifikasi" style="min-height: 80px;max-height: 240px" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kondisi</label>
                        <select name="kondisi" id="kondisi" class="form-control" required>
                            <option value="" selected>Pilih</option>
                            <option value="baru">Baru</option>
                            <option value="bekas">Bekas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="sumber_dana">Sumber Dana</label>
                        <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#ubahData').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var idBarang = button.data('id-barang')
            var namaBarang = button.data('nama-barang')
            var spesifikasi = button.data('spesifikasi')
            var lokasi = button.data('lokasi')
            var kondisi = button.data('kondisi')
            var jumlahBarang = button.data('jumlah-barang')
            var sumberDana = button.data('sumber-dana')
            
            var modal = $(this)
            modal.find('#id').val(id)
            modal.find('#id_barang').val(idBarang)
            modal.find('#nama_barang').val(namaBarang)
            modal.find('#spesifikasi').val(spesifikasi)
            modal.find('#lokasi').val(lokasi)
            modal.find('#kondisi').val(kondisi)
            modal.find('#jumlah_barang').val(jumlahBarang)
            modal.find('#sumber_dana').val(sumberDana)
        })
    })
</script>
@endsection