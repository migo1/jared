<div class="card-body">

        <input type="hidden" name="user_id" id="user_id">
    <input type="hidden" name="car_model_id" id="car_model_id">

        <input type="hidden" name="rent_date" id="rent_date">

       
            <input type="hidden" name="return_date" id="return_date">
            <input type="hidden" name="total_days" id="total_days">
<input type="hidden" name="amount" id="amount">
    
        


<div class="form-group" id="return_status">
        <strong>availability:</strong>
        <div class="form-check" >
          <label class="form-check-label">
            <input type="checkbox" value="returned" class="form-check-input" name="return_status">Returned
          </label>
        </div> 
        <div class="form-check" >
                <label class="form-check-label">
                  <input type="checkbox" value="reserved" class="form-check-input" name="return_status">Picked up
                </label>
              </div>
    </div>


<div class="form-group" id="payment_status">
        <strong>Payment:</strong>
        <div class="form-check" >
          <label class="form-check-label">
            <input type="checkbox" value="Paid" class="form-check-input" name="payment_status">Paid
          </label>
        </div>
    </div>
</div>