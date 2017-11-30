@extends('layout')

@section('styles')
@endsection

@section('content')

<div class="container">
  <div class="container">
    <div class="mt-3">
      <h1>{{$product->prodName}}</h1>
    </div>
    <p class="lead">The {{$product->prodName}} is a 
      @if(!is_null($product->color))
      {{lcfirst($product->color->colprodDesc)}} 
      @endif
      wine  
      @if(!is_null($product->region))
      from {{$product->region->regionName}}
      @if(!is_null($product->region->country))
      , {{$product->region->country->CountryName}}.
      @endif

      @else
      of unknown origin.
      @endif

    </p>
    <h4>
      @if(!is_null($product->prodSellPrice))
      <h4>${{sprintf("%.2f", $product->prodSellPrice)}}</h4>
      @else
      Unknown Price
      @endif
    </h4>
    <br>
    <h4>More Information</h4><hr>
    <div class="col-md-4">
      <table class="table table-condensed table-hover table-bordered" >
        @if(!is_null($product->prodNum))
        <tr>
          <th>Product Number</th>
          <td>
            {{$product->prodNum}}  
          </td>
        </tr>
        @endif
        @if(!is_null($product->color))
        <tr>
          <th>Colour</th>
          <td>
            {{$product->color->colprodDesc}}  
          </td>
        </tr>
        @endif
        @if(!is_null($product->region))
        <tr>
          <th>Region</th>
          <td>
            {{$product->region->regionName}}  
          </td>
        </tr>
        @if(!is_null($product->region->country))
        <tr>
          <th>Country</th>
          <td>
            {{$product->region->country->CountryName}}  
          </td>
        </tr>
        @endif
        @endif

        @if(!is_null($product->packaging))
        <tr>
          <th>Pack Qty</th>
          <td>
            {{$product->packaging->packQty}}  
          </td>
        </tr>
        @endif
        @if(!is_null($product->prodFormat))
        <tr>
          <th>Product Size</th>
          <td>
            {{$product->prodFormat}} ml 
          </td>
        </tr>
        @endif
        @if(!is_null($product->prodSellPrice))
        <tr>
          <th>Product Price</th>
          <td>
            ${{sprintf("%.2f", $product->prodSellPrice)}}
          </td>
        </tr>
        @endif
      </table>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
  $(function() {
    $( "#region" ).change(function() {
      if(typeof $('option:selected',this).attr('data-country') !== 'undefined'){
        $("#country").val($('option:selected',this).attr('data-country'));
      }
    });


    // If the packaging table was in use
    // $("#package").hide();
    // $( "#pack" ).change(function() {
    //   if($(this).val()=="packaged"){
    //     $("#package").show();
    //   } else {
    //     $("#package").hide();
    //   }
    // });
  });  
</script>
@endsection