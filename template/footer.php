
<!-- edw mpainei to gnko footer (html) -->

<footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h5>Copyright &copy <i>Πανεπιστήμιο Δυτικής Μακεδονίας, τμήμα Μηχανικών Πληροφορικής και Τηλεπικοινωνιών</i></h5>
                    </div>
                </div>
            </div>
        </div>          
    </footer>
   



<!-- Dimiourgia modal gia aposundesi-->
<div id="modal-logout" class="modal-logout" role="dialog">
  <div class="modal-dialog">

    <!-- Periexomeno Modal -->
    <div class="modal-content">
      <div class="modal-header">
        <span title="Close" class="close close_modal" align="left">&times;</span>
        <h4 class="modal-title">Αποσύνδεση</h4>
      </div>
      <div class="modal-body">
            <label>Είστε σίγουρος πως θέλετε να αποσυνδεθείτε;</label>
                        
            <div id="ack2"></div>
            <br/>
            
            <ul class="logout-btn">
                <li><button type="button" id="logout_user" class="ok-btn">OK</button></li>
                <li><button type="button" class="cancel-btn close_modal">Cancel</button></li>
            </ul>

            
      </div>
      <div class="modal-footer" >
        <span title="Close" class="close close_modal" align="left">&times;</span>
      </div>
    </div>

  </div>
</div>







<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript" src="js/script.js"></script> -->

<script type="text/javascript" src="js/close-modal.js"></script>    
<script type="text/javascript" src="js/renew-page.js"></script>

<script type="text/javascript">
    
$(document).ready(function() {
    $( "#logout_btn" ).click(function() {
        $(".modal-logout").css({
            "opacity": "1",
            "pointer-events": "auto"});
    });
    $( ".close_modal" ).click(function() {
        $(".modal-logout").css({
            "opacity": "0",
            "pointer-events": "none"});
    });
    $( "#logout_user" ).click(function() {
        $.ajax({url: "/diplwmatiki/t_selida/ajax/logout.php", success: function(result){
            window.location = "/diplwmatiki/t_selida/?p=main";
        }});
    });
});

</script>

<?php

    if(file_exists('template/footer/'.$p.'.footer.php')){
        include_once('template/footer/'.$p.'.footer.php');
    // }else{
    //     include_once( 'template/footer/main.footer.php' );
    }
?>

</body>
</html>