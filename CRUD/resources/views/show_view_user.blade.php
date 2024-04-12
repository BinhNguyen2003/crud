@extends('dashboard')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
             
                <div class="card">
                    <div class="card-header">
                        <h3>Personal page <a href="{{ route('dashboard')}}"
                                class="btn btn-danger float-end">BACK</a></h3>

                    </div>
                    <div class="card-body">
                        <form action="{{route('user.update', ['id'=>$user->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Họ tên:</label>
                                <p class="text-muted">{{$user->name}}</p>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email:</label>
                                <p class="text-muted">{{$user->email}}</p>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">SDT:</label>
                                <p class="text-muted">{{$user->phone}}</p>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Ảnh đại diện:</label>
                                <img src="/uploads/{{$user -> image}}" 
                                alt="avarta" class="img-avarta" style=" width: 70px;" />
                            </div>                   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection