@extends('template.v_template')

@section('content')

<div class="container">


    @if ($message = Session::get('pesan'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ $message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <a href="" class="btn btn-primary mb-2 mt-2">Tambah</a>
    <table class="table table-striped mt-2">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1;?>
        @foreach ($mahasiswa as $mhs)

        <tr>
            <th><?=$no++?></th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->kelamin}}</td>
            <td>

                <a type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalDetail">
                    Detail
                </a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="/home/delete/{{$mhs->id}}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




@endsection
