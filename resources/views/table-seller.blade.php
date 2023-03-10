@extends('layouts.main')

@section('content')


 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
      </ol>
    </div>

      <div class="row">
        <div class="col-lg-12 mb-4">
          <!-- Simple Tables -->
          <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
              <a class="collapse-item btn btn-primary" href="/seller_create" >Tambah Data +</a>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Harga</th>
                    <th>Jenis Kelamin</th>
                    <th>Image</th>
                    <th>Rating</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $dataSeller as $item )
                  <tr> 
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->jeniskelamin}}</td>
                    <td><img src="{{asset('fotoseller/'.$item->foto)}}" alt="" style="width: 3vw"></td>
                    <td>{{$item->rating->name}}</td>
                    <td style="display: flex; gap: 2vw"><a href="seller/update/{{$item->id}}" class="btn  btn-primary">Edit</a>
                    <form action="/seller/destroy/{{$item->id}}" method="POST" onsubmit="return confirm('mau hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                    </form>
                   
                    
                
                   
                  </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
      </div>
      <!--Row-->

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to logout?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            <a href="login.html" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!---Container Fluid-->
</div>

    
@endsection