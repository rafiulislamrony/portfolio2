
@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>

            <form action="{{route('admin.portfolios.update', $portfolios->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Big Image</h3>
                        <img class="img-thumbnail" style="height: 30vh" src="{{url($portfolios->big_image)}}" alt="">
                        <input class="mt-3" type="file" id="bc_img" name="big_image">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Small Image</h3>
                        <img class="img-thumbnail" style="height: 20vh" src="{{url($portfolios->small_image)}}" alt="">
                        <input class="mt-3" type="file" id="bc_img" name="small_image">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div>
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$portfolios->title}}">
                        </div>
                        <div class="mb-4 mt-3">
                            <label for="sub_title">
                                <h4>Sub Title</h4>
                            </label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$portfolios->sub_title}}">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description Image</h3>
                        <textarea class="form-control" name="description" rows="5">{{$portfolios->description}}</textarea>
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div>
                            <label for="client">
                                <h4>Client</h4>
                            </label>
                            <input type="text" class="form-control" id="client" name="client" value="{{$portfolios->client}}">
                        </div>
                        <div class="mb-4 mt-3">
                            <label for="category">
                                <h4>Category</h4>
                            </label>
                            <input type="text" class="form-control" id="category" name="category" value="{{$portfolios->category}}">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>

            <div style="height: 100vh"></div>
            <div class="card mb-4">
                <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the
                    static navigation demo.</div>
            </div>
        </div>
    </main>
@endsection
