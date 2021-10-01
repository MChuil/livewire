<!-- CORE JS FRAMEWORK - START --> 
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/popper.min.js') }}" type="text/javascript"></script> 
<!-- <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>  

<script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script> 
<script src="{{ asset('assets/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>  
<script src="{{ asset('assets/plugins/bootbox/bootbox.all.min.js') }}" type="text/javascript"></script>  
<!-- CORE JS FRAMEWORK - END --> 


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE TEMPLATE JS - START --> 
<script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS - END --> 

<!-- Sidebar Graph - START --> 
<script src="{{ asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/chart-sparkline.js') }}" type="text/javascript"></script>
<!-- Sidebar Graph - END --> 

<script>
    function noty(msg, cerrar = false){
        bootbox.alert({
            message:msg,
            backdrop: cerrar
        });
    }
</script>
@livewireScripts