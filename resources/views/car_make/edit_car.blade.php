<div class="row">
    <div class="col-12">
          <div class="card">
                  <div class="card-body">

                            <input type="hidden" name="car_make_id" value="{{ $car_make->id }}">
                          <div class="form-group row">
                                  <label  class="col-sm-3 text-right control-label col-form-label">Car Model</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" name="model" id="model">
                                  </div>
                              </div>
                              <div class="form-group row">
                                      <label  class="col-sm-3 text-right control-label col-form-label">Number Plate</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="form-control" name="number_plate" id="number_plate">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                    <label  class="col-sm-3 text-right control-label col-form-label">Price per day</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="price" id="price">
                                    </div>
                                </div>
{{--
                                  <div class="form-group row">
                                          <label  class="col-sm-3 text-right control-label col-form-label">Car Picture</label>
                                          <div class="col-sm-9">
                                              <input type="file" class="form-control" name="photo" id="photo">
                                          </div>
                                      </div>--}}
                                      <input type="hidden" name="photo" id="photo">
                                      <div class="form-group row">
                                          <label  class="col-sm-3 text-right control-label col-form-label">Car's condition</label>
                                          <div class="col-sm-9">
                                              <input type="text" class="form-control" name="descriptions" id="descriptions">
                                          </div>
                                      </div>
                  </div>
          </div>
      </div>
  </div>