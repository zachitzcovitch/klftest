<!-- Buy Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ route('new') }}" id="newWineForm"> 
      {{ csrf_field() }}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="newModal">Add New Wine</h4>
      </div>
      <div class="modal-body">
        <div class="contact col-md-12"> 
          <div class="col-md-6">Wine Name</div>
          <div class="col-md-6"><input name="name" class="form-control" type="text" id="name" placeholder="Wine Name"/></div>
          <div class="clearfix"></div>
          <div class="col-md-6">Wine Colour</div>
          <div class="col-md-6">
            <select name="color" class="form-control">
              <option selected="selected">Select One</option>
              @foreach($colors as $color)
                <option value="{{$color['colprodID']}}">{{$color['colprodDesc']}}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">Wine Region</div>
          <div class="col-md-6">
            <select name="region" id="region" class="form-control">
              <option selected="selected">Select One</option>
              <option value="">Unknown</option>
              @foreach($regions as $region)
                <option value="{{$region['regionID']}}" data-country="{{$region['regionCountryID']}}">{{$region['regionName']}}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">Wine Country</div>
          <div class="col-md-6">
            <select name="country" id="country" class="form-control" disabled="disabled">
              <option selected="selected">Country</option>
              <option value="">Unknown</option>
              @foreach($countries as $country)
                <option value="{{$country['CountryID']}}">{{$country['CountryName']}}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6">Bottle Size (ml)</div>
          <div class="col-md-6"><input name="size" class="form-control" type="text" id="size" placeholder="Bottle Size"/></div>
          <div class="clearfix"></div>
          <div class="col-md-6">Buy Price</div>
          <div class="col-md-6"><input name="priceBuy" class="form-control" type="text" id="priceBuy" placeholder="Product Buy Price"/></div>
          <div class="clearfix"></div>
          <div class="col-md-6">Buy Quantity</div>
          <div class="col-md-6"><input name="prodQtyBuy" class="form-control" type="text" id="prodQtyBuy" placeholder="Product Buy Quantity"/></div>
          <div class="clearfix"></div>
          <div class="col-md-6">Sell Price</div>
          <div class="col-md-6"><input name="priceSell" class="form-control" type="text" id="priceSell" placeholder="Product Sell Price"/></div>
          <div class="clearfix"></div>
          <div class="col-md-6">Package Quantity</div>
          <div class="col-md-6"><input name="packQty" class="form-control" type="number" id="packQty" placeholder="Package Quantity"/></div>
          <div class="clearfix"></div>
          <br>


          {{-- If the packaging table was in use --}}
{{--           <div class="col-md-6">Package Type</div>
          <div class="col-md-6">
            <select id="pack" class="form-control">
              <option selected="selected" disabled="disabled">Select One</option>
              <option value="individual">Individual</option>
              <option value="packaged">Packaged</option>
            </select>
          </div>
          <div class="clearfix"></div>
          <div id="package" style="display:none;">
            <div class="col-md-6">Package Quantity</div>
            <div class="col-md-6">
              <select name="packageqty" id="packageqty" class="form-control">
                <option selected="selected" disabled="disabled">Select One</option>
                @foreach($packages as $package)
                  <option value="{{$package['packID']}}">{{$package['packQty']}}</option>
                @endforeach
              </select>
            </div>
            <div class="clearfix"></div>
          </div>
 --}}
         </div>          
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-md btn-primary">Add Wine</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </form>
    </div>
  </div>
</div>