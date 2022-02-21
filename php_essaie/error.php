<?php
    echo ' <div class="col-lg-5 d-flex m-auto alert alert-dismissible fade show bg-danger" role="alert">
    <strong>Erreur!</strong>&nbsp;';
    echo "Nous n\'avions pas pu satisfaire a votre demande!";
    echo '<br>';
    echo "Le nombre de Kilometrage n est pas permis dans notre pays!\n Veuillez reessayer";
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>';
?>
<script src="../vendor/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
});
</script>