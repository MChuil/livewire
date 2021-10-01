<!DOCTYPE html>
<html class=" ">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Sistema PyMEs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

       @include('layouts.theme.styles')        
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
        @include('layouts.theme.topbar')
        <!-- END TOPBAR -->

        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            @include('layouts.theme.sidebar')
            <!--  SIDEBAR - END -->
            
            <!-- START CONTENT -->
            <section id="main-content" class=''>
                <section class="wrapper main-wrapper">

                    @yield('content')

                </section>
            </section>
            <!-- END CONTENT -->

            @include('layouts.theme.chatapi')

        </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        @include('layouts.theme.scripts')
    </body>
</html>