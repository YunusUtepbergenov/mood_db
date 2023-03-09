<div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="menu-inner-shadow"></div>
        <div class="menu-inner py-1">
          <div class="card" style="height:50%; border-bottom: 1px solid #ccc; overflow:auto;width:100%">
              <div class="row" id="select_type" style="margin:0">
                 <div class="card-header">
                    <span style="margin-left: 5px;">Soha</span> 
                 </div>
              </div>
              <div style="overflow:auto">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <div class="form-check">
                          <input class="form-check-input" wire:model="filters" type="checkbox" value="court_records" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            Sud
                          </label>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="form-check">
                          <input class="form-check-input" wire:model="filters" type="checkbox" value="appeals" id="defaultCheck2">
                          <label class="form-check-label" for="defaultCheck2">
                            Murojaatlar
                          </label>
                      </div>
                  </li>
                  {{-- <li class="list-group-item">
                      <div class="form-check">
                          <input class="form-check-input" wire:model="filters" type="checkbox" value="demography" id="defaultCheck3">
                          <label class="form-check-label" for="defaultCheck3">
                            Demografiya
                          </label>
                      </div>
                  </li> --}}
                  <li class="list-group-item">
                      <div class="form-check">
                          <input class="form-check-input" wire:model="filters" type="checkbox" value="phisicals" id="defaultCheck4">
                          <label class="form-check-label" for="defaultCheck4">
                            Soliq tushimlari
                          </label>
                      </div>
                  </li>
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
                  @if ($columns)
                    @foreach ($columns as $column)
                      <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4">
                              @if (isset($translate[$column]))
                                {{$translate[$column]}}
                              @else
                                {{$column}}
                              @endif
                            </label>
                        </div>
                      </li>
                    @endforeach                    
                  @endif
                </ul>      
            </div>
         </div>

        {{-- <ul class="menu-inner py-1"> --}}
          {{-- <li style="height: 50%">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                  Soha
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" wire:model="filters" type="checkbox" value="court_records" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Sud
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" wire:model="filters" type="checkbox" value="appeals" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                              Murojaatlar
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" wire:model="filters" type="checkbox" value="demography" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">
                              Demografiya
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" wire:model="filters" type="checkbox" value="phisicals" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4">
                              Soliq tushimlari
                            </label>
                        </div>
                    </li>
                </ul>
              </div>
          </li> --}}
          {{-- <li style="height: 50%">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                  Indikatorlar
                </div>
                <ul class="list-group list-group-flush">
                  @if ($columns)
                    @foreach ($columns as $column)
                    <li class="list-group-item">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                          <label class="form-check-label" for="defaultCheck4">
                            @if (isset($translate[$column]))
                              {{$translate[$column]}}
                            @else
                              {{$column}}
                            @endif
                          </label>
                      </div>
                    </li>
                    @endforeach                    
                  @endif
                </ul> 
              </div>
          </li>

        </ul> --}}
        </div>
    </aside>
</div>
