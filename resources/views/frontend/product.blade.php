@extends('main')

@section('content')
    <product-description-component :product_id='@json($product)'></product-description-component>
@endsection