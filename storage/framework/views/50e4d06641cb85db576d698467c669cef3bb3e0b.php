<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if(session()->get('message')): ?>
    <div class="alert alert-success" role="alert">
        <strong>SUCCESS:</strong><?php echo e(session()->get('message')); ?>

    </div>

    <?php endif; ?>
    <div class="row justify-content-center">
        <?php echo $__env->make('includes.Profile_Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header"><?php echo e(Auth::user()->name); ?>'s Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo route('profileUpdate'); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name"><strong>Name:</strong></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(Auth::user()->name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(Auth::user()->email); ?>">
                        </div>
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smsApp\resources\views/profile.blade.php ENDPATH**/ ?>