@extends('layouts.main')

@section('content1')

<head>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>
    <!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Game</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active" aria-current="page">Form Game</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4" style="width: 80vw">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
        </div>
        <div class="card-body">
          <form action="{{ url('product/update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Game Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Game Name" name="name" value="{{$product->name}}">
            </div>
            <div class="type-select">
              <h2 style="font-size: 1vw">Select Your Type</h2>
              <select name="type_id" id="" class="form-select mb-3" name="type_id">
                <option value="mobile" {{ $product->type->id == '1' ? 'selected': ""}}>Mobile</option>
                <option value="desktop" {{ $product->type->id == '2' ? 'selected': ""}}>Desktop</option>
              </select>
            </div>
            {{-- <select name="type_id" id="" class="form-select mb-3" name="type_id">
              <option selected>Type</option>
              @foreach ($type as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
            </select> --}}
            <div class="form-group">
              <label for="exampleInputPassword1">Input Picture</label>
              <div class="custom-file" >
                <img src="{{asset('fotoproduct/'.$product->foto)}}" alt="" class="w-[2vw] h-[1vh]" style="width: 10vw; height: 10vh;"> 
              </div>
              <input type="file"  name="foto" value="{{$product->foto}}" style="margin-top: 10vw" >
            </div>
            <div class="form-group">
            </div>
            
              
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
  <!--Row-->

  <!-- Documentation Link -->
  <div class="row">
    <div class="col-lg-12 text-center">
      <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
          target="_blank">
          bootstrap forms documentations.</a> and <a
          href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
          groups documentations</a></p>
    </div>
  </div>

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

