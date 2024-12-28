<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card">
  <div class="card-body">

    <h5 class="card-title">Appointment Form</h5>

    
    <form class="row g-3" method="post">
      <div class="col-12">
        <label for="inputName" class="form-label">Full Name</label>
        <input type="text" name = "fullname" class="form-control" id="inputName" placeholder="Your Full Name">
      </div>
      <div class="col-12">
        <label for="inputEmai" class="form-label">Email</label>
        <input type="email" name = "email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
      </div>
      <div class="col-12">
        <label for="inputContactNo" class="form-label">Contact Number</label>
        <input type="number" name = "contact_no"  class="form-control" id="inputContactNo" placeholder="09123456789">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" name = "address" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="selectForm" class="form-label">Appointment Forms</label>
          <select class="form-select" name="forms" id="selectForm" aria-label="Appointment">
            <option selected>Baranggay ID</option>
            <option value="1">Baranggay Clearance</option>
            <option value="2">Certificate of Indigency</option>
          </select>
      </div>
      <div class="col-12">
        <label for="inputDate" class="form-label">Date</label>
        <input type="date" name = "date" class="form-control" id="inputDate">
      </div>
      <div class="text-center">
        <button type="submit" name = "btn_submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form>

  </div>
</div>