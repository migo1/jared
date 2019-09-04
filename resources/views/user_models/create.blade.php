<div class="row">
      <div class="col-12">
            <div class="card">
                    <div class="card-body">
                            <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Car Make</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="car_make_id">
                                            @foreach ( $carMake as $car)
                                        <option value=""></option>
                                        <option value="{{$car->id}}">{{$car->make}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label  class="col-sm-3 text-right control-label col-form-label">Car Model</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="model" placeholder="car model...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Number Plate</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="number_plate" placeholder="number plate...">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Price per day</label>
                                        <div class="col-sm-9">
                                            <input type="integer" class="form-control" name="price" placeholder="Ksh....">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label  class="col-sm-3 text-right control-label col-form-label">Car Picture</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="photo" placeholder="car photo...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label  class="col-sm-3 text-right control-label col-form-label">Car's condition</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="descriptions" placeholder="car's condition...">
                                            </div>
                                        </div>

                           {{--   
                   
      
                                        <div class="form-group">
                                            <label for="car model" class="control-label">car model:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Description</label>
                                            
                                                <textarea class="form-control" id="message-text"><textarea>
                                          
                                        </div>

 --}}
                    </div>
            </div>
        </div>
    </div>