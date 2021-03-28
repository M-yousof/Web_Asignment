@extends('Master')
@section("content")
<div class="custome-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
  <h3>Result for product</h3>
    @foreach ($products as $item)
    <div class="search-item">
        <a href="detail/{{$item['id']}}">
            <img class="trending-img" src="{{$item['gallery']}}">
            <div class="">
            <h3>{{$item['name']}}</h3>
            <h4>{{$item['description']}}</h4>
            </div>
        </a>
    </div>
</div>
@endforeach

</div>
@endsection