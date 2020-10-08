@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TELEVISIONS:</div>
                <div>
                  <input id="price_best" type="checkbox" name="price_best">
                  <label for="price_best">Price Best of</label>
                </div>

                <div class="card-body">
                  <ul id="televisions">

                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
