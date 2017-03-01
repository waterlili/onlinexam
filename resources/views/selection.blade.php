                <div class="form-group">
                    <label>Your major</label>
                    <div>
                      <select data-placeholder="what's your major?"  class="form-control chosen-select" multiple tabindex="6">
                        <option value=""></option>
                        <optgroup label="">
                          @foreach($majors as $major)
                            <option>{{ $major->title }}</option>
                          @endforeach                  
                        </optgroup>
                      </select>
                    </div>
              </div>
              <div class="form-group">
                <label>Last Degree</label>
                <div>
                  <select data-placeholder="what's your last degree topic?"  class="chosen-select form-control" tabindex="5">
                    <option value=""></option>
                        
                          @foreach($majors_lvl as $lvl)
                            <option>{{ $lvl->title }}</option>
                          @endforeach                  
                        
                </select>

                </div>
              </div>
              <div class="form-group">
                <label>Your job</label>
                <div>
                <select data-placeholder="what's your job?"  class="chosen-select form-control" tabindex="5">
                    <option value=""></option>
                        <optgroup label="">
                          @foreach($jobs as $job)
                            <option>{{ $job->title }}</option>
                          @endforeach                  
                        </optgroup>
                </select>

                </div>
              </div>
              <div class="form-group">
                    <label>Favorite art fields</label>
                    <div>
                      <select data-placeholder="what's it?"  class="chosen-select form-control" multiple tabindex="6">
                      <option value=""></option>
                      <optgroup label="">
                        @foreach($art_fields as $field)
                          <option>{{ $field->title }}</option>
                        @endforeach                  
                      </optgroup>
                      </select>
                    </div>
                    
              </div>
              <div class="form-group">
                    <label>Favorite sport fields</label>
                    <div>
                      <select data-placeholder="what's it?" style="border-color: #d2d6de;" class="chosen-select form-control" multiple tabindex="6">
                      <option value=""></option>
                      <optgroup label="">
                        @foreach($sport_fields as $field)
                          <option>{{ $field->title }}</option>
                        @endforeach                  
                      </optgroup>
                </select>
                    </div>
                    
              </div>