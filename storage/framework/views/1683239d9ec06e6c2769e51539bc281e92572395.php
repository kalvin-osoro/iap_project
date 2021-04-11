<div class="card mb-3">
    
    <img src="<?php echo e(url('/img/class.JPG')); ?>" alt="Image"/>
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the information about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">adm_no</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->adm_no); ?></td>
                    <td><?php echo e($student->firstName); ?></td>
                    <td><?php echo e($student->secondName); ?></td>
                    <td><?php echo e($student->age); ?></td>
                    <td><?php echo e($student->speciality); ?></td>
                    <td>

                        <a href="<?php echo e(url('/student/edit/'.$student->id)); ?>" class="btn btn-sm btn-warning">Edit</a>

                        <form onsubmit="return confirm('Do you really want to delete?');" action="<?php echo e(url('/student/destroy/'.$student->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                           <span><input class="btn btn-sm btn-danger" type="submit" value="Delete" /></span>

                         </form>

                    </td>


                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>





<?php /**PATH C:\xampp\htdocs\smsApp\resources\views/studentslist.blade.php ENDPATH**/ ?>