<?php 

session_start();

if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = 'You aer already loged in';
    header('location: index.php');
    exit();
}


include('includes/header.php'); 

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card mt-5">
                <?php if(isset($_SESSION['message'])) { ?>
      
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey! </strong><?php echo $_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             <?php   
              unset($_SESSION['message']);

             } ?>

                <div class="card-header">
                    <h3>Registration Form</h3>
                </div>
                <div class="card-body">
                    <form action="functions/authcode.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input name="phone" type="number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input name="cpassword" type="password" class="form-control">
                        </div>
                        
                        <button type="submit"  name="register_btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>