@extends('adminlte.master')

@section('content')

@if(session('success'))
<div class="alert alert-success">
{{ session('success')}}
</div>
@endif
    <div class="mt-4 mr-4 m-4">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Table Pertanyaan</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $p)
                        <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $p->judul }} </td>
                        <td> {{ $p->isi  }}</td>
                        <td> 
                        <a href="/pertanyaan/show/{{ $p->id }}" class="btn btn-info btn-sn">Show</a><br><br>
                            <a href="/pertanyaan/edit/{{ $p->id }}" class="btn btn-success">Edit</a><br><br>
                            <!-- <a href="/pertanyaan/edit/{{ $p->id }}" class="btn btn-success">Edit</a><br><br> -->
                            <form action="/pertanyaan/Hapus/{{ $p->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <a href="/pertanyaan/create" action class="btn btn-info">Buat Pertanyaan Baru</a>
                </div>
              <!--
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
              -->
            </div>


    </div>
@endsection