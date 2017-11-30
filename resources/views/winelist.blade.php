@extends('layout')

@section('styles')
@endsection

@section('content')

<div class="container">
  <div class="col-md-8">
    @foreach($products as $product)
    <div class="media" style="border-right:1px solid #eee; cursor: pointer;" onclick="window.location='{{url('/wine/'.$product->prodID)}}';">
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNWRhZTRiNjhlZCB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1ZGFlNGI2OGVkIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">{{$product->prodName}}</h4>
        @if(!is_null($product->color))
        {{$product->color->colprodDesc}} &#9899;
        @else
        Unknown Colour &#9899;
        @endif
        @if(!is_null($product->region))
        {{$product->region->regionName}},
        @if(!is_null($product->region->country))
        {{$product->region->country->CountryName}}
        @endif

        @else
        Unknown Origin
        @endif
        <div class="pull-right" style="padding-right:20px;">
          @if(!is_null($product->prodSellPrice))
          <h4>${{sprintf("%.2f", $product->prodSellPrice)}}</h4>
          @else
          Unknown Price
          @endif
        </div>
      </div>
      <hr>
    </div>
    @endforeach
  </div>

{{-- <div class="list-group col-md-8">
@foreach($products as $product)
<a href="#" class="list-group-item">
<h4 class="list-group-item-heading">{{$product->prodName}}</h4>
<p class="list-group-item-text">
@if(!is_null($product->color))
{{$product->color->colprodDesc}}
@endif
</p>
</a>
@endforeach
</div>
--}}
  <div class="col-md-4">
    <span style="color:grey;">Showing results {{($page*183)-182}} to {{($page*183)}} of {{$pages}}</span>
    <br><br><br>
    <h4>Page Navigation</h4>
    <nav aria-label="Page navigation" class="block-center">
      <ul class="pagination pagination-sm">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        @for($i=0; $i<floor($pages/182); $i++)
        <li><a href="?page={{$i+1}}">{{$i+1}}</a></li>
        @endfor
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    <button type="button" class="btn btn-primary btn-lg btn-block" style="background:#BA1200;" data-toggle="modal" data-target="#newModal">Add New Wine</button>

  </div>
</div>
@include('modals.newwine')

@endsection

@section('scripts')
@endsection