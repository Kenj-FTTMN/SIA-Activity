<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card">
  <div class="card-body">

    <h5 class="card-title">Forum</h5>

    
    <form class="row g-3" method="post">
      <div class="col-12">
        <label for="inputName" class="form-label">Full Name</label>
        <input type="text" name = "fullname" class="form-control" id="inputName" placeholder="Your Name">
      </div>
      <div class="col-12">
        <label for="inputEmai" class="form-label">Email</label>
        <input type="email" name = "email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
      </div>
      <div class="col-12">
        <label for="inputNumber" class="form-label">Contact Number</label>
        <input type="number" name = "number"  class="form-control" id="inputNumber" placeholder="09123456789">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" name = "address" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputComment" class="form-label">Comment</label>
        <input type="text" name = "Comment" class="form-control" id="inputComment" placeholder="Leave a comment/suggestion for the community...">
      </div>
      <div class="text-center">
        <button type="submit" name = "btn_submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form>

  </div>
</div>