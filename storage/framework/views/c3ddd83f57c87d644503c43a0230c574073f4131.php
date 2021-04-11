<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Student management system</title>
</head>
<body>
<?php echo $__env->make("navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

<?php if($layout == 'index'): ?>
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
            </div>
        </div>
    </div>
<?php elseif($layout == 'create'): ?>
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>
                        <form action="<?php echo e(url('/student/store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>adm_no</label>
                                <input name="adm_no" type="text" class="form-control"  placeholder="Enter adm_no">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>


                            <div class="form-group">
                                <label>second Name</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
<?php elseif($layout == 'show'): ?>
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="col"></section>
        </div>
    </div>
<?php elseif($layout == 'edit'): ?>
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://marketplace.canva.com/MAB7yqsko0c/1/screen_2x/canva-smart-little-schoolgirl--MAB7yqsko0c.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="<?php echo e(url('/student/update'.$student->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>adm_no</label>
                                <input value="<?php echo e($student->adm_no); ?>" name="adm_no" type="text" class="form-control"  placeholder="Enter adm_no">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="<?php echo e($student->firstName); ?>" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>second Name</label>
                                <input value="<?php echo e($student->secondName); ?>" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="<?php echo e($student->age); ?>" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="<?php echo e($student->speciality); ?>" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
<?php endif; ?>

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\smsApp\resources\views//student.blade.php ENDPATH**/ ?>