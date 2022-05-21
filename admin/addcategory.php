<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('../middleware/adminmiddleware.php'); ?>
<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Add Category</h3>
        </div>
        <div class="card-body mb-3">
          <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <label for="">Category Name</label>
                <input type="text" class="form-control" placeholder="Category Name" name="category_name">
              </div>
              <div class="col-md-6">
                <label for="">Category Slug</label>
                <input type="text" class="form-control" placeholder="Category Slug" name="category_slug">
              </div>
              <div class="col-md-12">
                <label for="">Category Desctiption</label>
                <textarea name="category_des" rows="3" class="form-control"></textarea>
              </div>
              <div class="col-md-6">
                <label for=""> Image</label>
                <input type="file" class="form-control" placeholder="Category Image" name="image">
              </div>
              <div class="col-md-6">
                <label for=""> Meta Title</label>
                <input type="text" class="form-control" placeholder="Meta Title" name="meta_title">
              </div>
              <div class="col-md-12">
                <label for="">Meta Description</label>
                <textarea name="meta_des" rows="3" class="form-control"></textarea>
              </div> 
              <div class="col-md-12">
                <label for="">Meta Keywords</label>
                <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
              </div>
              
              <div class="col-md-6">
                <label for="">Status</label>
                <input type="checkbox" name="status">
              </div>
              <div class="col-md-6">
                <label for="">Popular</label>
                <input type="checkbox" name="popular">
              </div>
              <div class="col-md-12">
                <button type="submit" name="category_btn" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>