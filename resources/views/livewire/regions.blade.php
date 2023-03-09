<div>
    <aside id="layout-menu1" class="menu-vertical menu bg-menu-theme" style="float: right; height:920px">
        <div class="menu-inner py-1">
            <div class="card" style="height:50%; border-bottom: 1px solid #ccc; overflow:auto">
                <div class="row" id="select_type" style="margin:0">
                   <div class="card-header">
                      <span style="margin-left: 5px;">Hududlar</span> 
                   </div>
                </div>
                <div style="overflow:auto">
                    <ul class="list-group list-group-flush">
                        @foreach ($regions as $key=>$region)
                          <li class="list-group-item">
                              <div class="form-check">
                                  <input class="form-check-input" wire:model="region" value="{{$region->code}}" type="radio" id="regions{{$key}}">
                                  <label class="form-check-label" for="regions{{$key}}">
                                  {{$region->name}}
                                  </label>
                              </div>
                          </li>
                        @endforeach
                      </ul>      
                </div>
             </div>
             
             <div class="card" style="height:50%; border-bottom: 1px solid #ccc; overflow:auto;width:100%">
                <div class="row" id="select_type1" style="margin:0">
                   <div class="card-header">
                      <span style="margin-left: 5px;">Tumanlar</span> 
                   </div>
                </div>

                <div style="overflow:auto">
                    <ul class="list-group list-group-flush">
                        @foreach ($districts as $key=>$district)
                          <li class="list-group-item" wire:key="{{$district->code}}">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" wire:model="district" value="{{$district->code}}" id="districts{{$key}}">
                                  <label class="form-check-label" for="districts{{$key}}">
                                  {{$district->name}}
                                  </label>
                              </div>
                          </li>
                        @endforeach
                      </ul>      
                </div>
             </div>
        </div>
    </aside>
</div>
