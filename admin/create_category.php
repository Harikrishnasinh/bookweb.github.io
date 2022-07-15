<?php
require "navbar.php";
?>
<div class="container my-4">
  <div class="col-lg-8 m-auto">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create a Category</h5>
        <small class="text-muted float-end">You can create a category here</small>
      </div>
      <div class="card-body">
        <form action="insert.php" method="POST">
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Category Name</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-folder"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Enter Category Name"
                name="cat_name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Category Image</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-folder"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname"
                placeholder="Enter Category Image" aria-label="John Doe" name="cat_img"
                aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>

          <button type="submit" name="create_category" class="btn btn-primary">Add category</button>
          <a href="category.php" class=" btn btn-danger">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require "footer.php";