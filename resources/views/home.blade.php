@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TELEVISIONS:</div>
                <div>
                  <input type="checkbox" name="price">
                  <label for="price">Price Best of</label>
                </div>

                <div class="card-body">
                  <ul>

                  </ul>
                    <br><br>
                    <a class="btn btn-primary" href="{{-- {{route('television.create')}} --}}">
                      CREATE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
