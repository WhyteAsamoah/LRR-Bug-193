<?php
include 'NoDirectPhpAcess.php';
?>

<?php
include 'Header.php';
?>

<div class="row">

    <div class="col-md-4 list-group" style="margin:auto;">

        <br>

        <h4 class="list-group-item active"> Please fill in each field below </h4>
        <div class="list-group-item">

            <div class="panel-body">

                <form method="post" action="Script.php">
                    <input type="hidden" name="update-student" value="true" />
                    <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname" placeholder="Your full name" class="form-control" value="<?php echo $_SESSION['user_fullname']; ?>" required="required" />
                    </div>
                    <div class="form-group">
                    <label>Student ID</label>    
                    <input type="text" name="user_student_id" placeholder="Entre your student ID" class="form-control" value="<?php echo $_SESSION['user_student_id']; ?>" required="required">
                    </div>
                    <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $_SESSION['user_email']; ?>" required="required" />
                    </div>
                    <input type="submit" name="submit" class="btn-primary" value="Update">
                    <?php
                      error_reporting(E_ALL);
                      if (isset($_SESSION['updatestudent_info'])) {
                          echo  '<hr><div class="alert alert-danger" role="alert">' . $_SESSION['updatestudent_info'] . '</div>';
                          $_SESSION['updatestudent_info'] = null;
                      }
                      ?>
                </form>

            </div>
        </div>
    </div>
</div>
<style>
    /*------------------------------------------------------------------
[ Login Button ]*/
    .btn-primary {
        color: white;
        border-radius: 5px;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        background: rgb(75, 184, 240);
        padding: 5px 105px;
        font-family: Poppins-Regular;
        font-size: 23px;
        line-height: 1.5;
    }
</style>
