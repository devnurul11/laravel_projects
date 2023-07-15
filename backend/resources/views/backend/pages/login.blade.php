<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">


    <title>Sign Up</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">


    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <link rel="stylesheet" href="../css/bracket.dark.css">
</head>

<body>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card wd-350">
                        <div class="card-body pd-x-20 pd-xs-40">
                            <h5 class="tx-xs-24 tx-normal tx-white mg-b-15">Sign in to continue</h5>
                            <p class="mg-b-30 tx-14">Don't have an account? <a href="">Create an account</a>,
                                it only takes less than a minute.</p>

                            <div class="form-group">
                                <input class="form-control form-control-dark" type="text" name="email"
                                    placeholder="Enter email address">
                            </div><!-- form-group -->
                            <div class="form-group">
                                <input class="form-control form-control-dark" type="text" name="email"
                                    placeholder="Enter password">
                            </div><!-- form-group -->
                            
                            <button class="btn btn-primary btn-block mb-4">Sign In</button>

                            <p class="tx-11 tx-uppercase tx-spacing-2">Or Sign In With</p>
                            <a href="#" class="btn btn-primary btn-icon">
                                <div><i class="fab fa-facebook"></i></div>
                            </a>
                            <a href="#" class="btn btn-primary btn-icon mg-l-5">
                                <div><i class="fab fa-twitter"></i></div>
                            </a>
                            <a href="#" class="btn btn-danger btn-icon mg-l-5">
                                <div><i class="fa fa-google-plus"></i></div>
                            </a>

                        </div><!-- card-body -->
                    </div><!-- card -->  
      </div>
      
        
                    
            



    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../lib/moment/min/moment.min.js"></script>
    <script src="../lib/peity/jquery.peity.min.js"></script>
    <script src="../lib/highlightjs/highlight.pack.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
        $(function() {
            'use strict'

            $('.form-layout .form-control').on('focusin', function() {
                $(this).closest('.form-group').addClass('form-group-active');
            });

            $('.form-layout .form-control').on('focusout', function() {
                $(this).closest('.form-group').removeClass('form-group-active');
            });

            // Select2
            $('#select2-a, #select2-b').select2({
                minimumResultsForSearch: Infinity
            });

            $('#select2-a').on('select2:opening', function(e) {
                $(this).closest('.form-group').addClass('form-group-active');
            });

            $('#select2-a').on('select2:closing', function(e) {
                $(this).closest('.form-group').removeClass('form-group-active');
            });

        });
    </script>
</body>

</html>
