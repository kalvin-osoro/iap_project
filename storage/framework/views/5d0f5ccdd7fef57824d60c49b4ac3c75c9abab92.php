<!--START SIDEBAR-->
<div class="col-md-3">
    <div class="card">
        <div class="card-header"><?php echo e(__('PROFILE')); ?></div>
        <img src="/img/avatar/<?php echo e(Auth::user()->avatar); ?>" alt="profilePicture" style="width: 250px; height: 200px;">
     </div>
     <br>
    <div class="card">

        <div class="card-header"><?php echo e(__('SIDEBAR')); ?></div>
        <a href="<?php echo route('home'); ?>" class="btn btn-primary btn-block">Dashboard</a>
        <a href="<?php echo route('profile'); ?>" class="btn btn-primary btn-block">Profile settings</a>
        <a href="<?php echo route('changePassword'); ?>" class="btn btn-primary btn-block">Change password</a>
        <a href="<?php echo route('profileAvatar'); ?>" class="btn btn-primary btn-block">Upload Profile Picture</a>

     </div>
     <br>

</div>
<?php /**PATH C:\xampp\htdocs\smsApp\resources\views/includes/Profile_Sidebar.blade.php ENDPATH**/ ?>