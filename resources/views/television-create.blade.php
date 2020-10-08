@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEW TELEVISION</div>

                <div class="card-body">
                  <form action="{{route('television.store')}}" method="post">
                      @csrf
                      @method('POST')

                      <div class="form-group">
                          <label for="name">NAME</label>
                          <br>
                          <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{$message}}</strong>
                            </span>
                          @enderror
                      </div><br>
                      <div class="form-group">
                          <label for="model">MODEL</label>
                          <br>
                          <input type="text" class="@error('model') is-invalid @enderror" name="model" value="{{old('model')}}">
                            @error('model')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                              </span>
                            @enderror
                      </div><br>
                      <div class="form-group">
                          <label for="brand">BRAND</label>
                          <br>
                          <input type="text" class="@error('brand') is-invalid @enderror" name="brand" value="{{old('brand')}}">
                            @error('brand')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                              </span>
                            @enderror
                      </div><br>
                      <div class="form-group">
                          <label for="price">PRICE</label>
                          <br>
                          <input type="number" class="@error('price') is-invalid @enderror" name="price" value="{{old('price', 0)}}">
                            @error('price')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                              </span>
                            @enderror
                      </div><br>
                      <div class="form-group">
                          <label for="description">DESCRIPTION</label>
                          <br>
                          <input type="text" class="@error('description') is-invalid @enderror" name="description" value="{{old('description')}}">
                            @error('description')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                              </span>
                            @enderror
                      </div><br>
                      <br><br>
                      <button class="btn btn-primary" type="submit">SAVE</button>
                      <br><br>
                  </form>


                </div>
            </div>
            <div class="card-header">
              <a class="btn" href="{{route('televisions.index')}}">
                HOME
              </a>
            </div>
        </div>
    </div>
</div>
@endsection
