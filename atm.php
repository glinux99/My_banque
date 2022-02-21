<?php session_start();?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="vendor/gr/parallax.js"></script>
    <?php include ('B_menu/header.html');?>
    <title>Bienvenu dans Nuru Banque</span> Of Congo</title>
</head>
<body>
    <?php if(($_SESSION['matricule'])){?>
        <form action="B_atm/atm_config.php" method="post" id="form_send">
            <div class="parallax-window justify-content-end d-flex" style="background: url('B_img/logo1.png') no-repeat 50% 25%; " data-parallax="scroll" data-image-src="B_img/femmes.jpg">
                <div class="my-auto mr-5">
                    <div class="mb-5">
                    <button type="submit" class="btn btn-submit">Francais</button>
                    </div>
                    <div>
                    <button type="submit" class="btn btn-submit">Anglais</button>
                    </div>
                </div>
            </div>
        </form>
   <?php }else{?>
        <form action="B_atm/atm_config.php" method="post" id="form_send">
        <div class="parallax-window justify-content-center d-flex" style="background: url('B_img/logo1.png') no-repeat 50% 25%; " data-parallax="scroll" data-image-src="B_img/femmes.jpg">
            <div class="row m-auto d-flex text-center" >
                <div class="input-group" style="margin-top: -120px;">
                    <img src="B_img/dif1.gif" alt="" class="mx-auto d-block">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="name" id="matricule" class="form-control" autofocus="autofocus" placeholder="your card number">
                    <input type="text" name="psswd" id="psswd" class="form-control" style="display: none;" placeholder="*************************">
                </div>
                <div class="input-group justify-content-center text-white">
                    <input type="text" name="matricule2" id="matricule2" style="display: none;" style="color: red;background: transparent" readonly>
                </div>
                <img src="B_img/png2.png" alt="" class="mx-auto d-block fixed-bottom mb-5">
            </div>
        </div>
    </form>
    <?php }?>
</body>
</html>
<script>
    var inp=document.getElementById('matricule');
    var pss=document.getElementById('psswd');
    var mat=document.getElementById('matricule2');
    mat.value='';
    pss.value='';
    inp.value='';
    inp.addEventListener('keyup', function(event){
        event.preventDefault();
        if(event.keyCode===13){
            if(inp.value!=''){
                inp.style.display='none';
                pss.style.display='';
                mat.style.display='';
                mat.value=inp.value;
                pss.focus();
            }
        }
    });
    pss.addEventListener('keyup', function(event){
        event.preventDefault();
        if(event.keyCode===13){
            if(pss.value!=''){
                inp.style.display='none';
                document.getElementById("form_send").submit();
            }
        }
    });
    $('#matricule').on('input', function(e){
       var val=$(this).val();
    
       if(val.length==4){
           document.getElementById('matricule').value+='-';
       }
       if(val.length==9){
           document.getElementById('matricule').value+='-';
       }
       if(val.length==14){
           document.getElementById('matricule').value+='-';
       }
       if(val.length==24){
        inp.style.display='none';
        pss.style.display='';
        mat.value=inp.value;
        pss.focus();
       }
       
    });
//    document.ready(function(){
//        $(document).bind('keypress', function(e){
//            if(e.keyCode==13){
//                alert('ok');
//            }
//        });
//    });
</script>
<style>
    .parallax-window {
    min-height: 665px;
    background: transparent;


}
</style>