@include('backend.inc.head')

  <body>

    <!-- ########## start: LEFT PANEL ########## -->
        @include('backend.components.let-sidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
        @include('backend.components.top-bar')
    <!-- ########## END: HEAD PANEL ########## -->
    
    <!-- ########## START: MAIN PANEL ########## -->
    <div id="content-div">
        @yield('contnet')
    </div>
        
    <!-- ########## END: MAIN PANEL ########## -->

    @include('backend.inc.script')

  </body>
</html>
