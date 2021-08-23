<footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">  &copy; 2019 Smart Service Team</span> 
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
</footer>
<script type="text/javascript">
      $(document).click(function () {
        $.ajax({
                              url:"ajax_session",
                              method:"POST",   
                              success:function(data){
                                if (data == 'non') {
                                   window.location.href = "<?php echo base_url().'lock_screen' ; ?>" ; 
                                 }else{
                                  
                                  }
                                }
                            })
               
      })
    </script>