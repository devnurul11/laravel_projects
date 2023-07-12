<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo e($seo->pageName); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('js/axios.min.js')); ?>"></script>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('components.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="" id="content-div">

            <!-- Header-->
            <?php echo $__env->yieldContent('content'); ?>

        </div>


    </main>
    <!-- Footer-->
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH G:\laragon\www\massignment17\resources\views/app.blade.php ENDPATH**/ ?>