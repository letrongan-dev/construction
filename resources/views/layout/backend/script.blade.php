<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="{{ asset('public/backend/dist/js/jquery.min.js')}}"></script>  
<script src="{{ asset('public/backend/dist/bootstrap/js/bootstrap.min.js')}}"></script> 

<!-- template --> 
<script src="{{ asset('public/backend/dist/js/bizadmin.js')}}"></script> 

<!-- Jquery Sparklines --> 
<script src="{{ asset('public/backend/dist/plugins/jquery-sparklines/jquery.sparkline.min.js')}}"></script> 
<script src="{{ asset('public/backend/dist/plugins/jquery-sparklines/sparkline-int.js')}}"></script> 

<!-- Chartjs JavaScript --> 
<script src="{{ asset('public/backend/dist/plugins/chartjs/chart.min.js')}}"></script> 
<script src="{{ asset('public/backend/dist/plugins/chartjs/chart-int.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>



@yield('script_admin')

<!-- for demo purposes --> 
<script src="{{ asset('public/backend/dist/js/demo.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->