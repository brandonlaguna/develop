<title>Ibrinezcoaching <?=$tag?></title>
<div id="slider" class="container-fluid parallax intro" data-type="background" data-speed="5">
<div class="hero">
    <p class="wow slideInUp"> CALIDAD DESDE EL SER</p>

    <a class="waves-effect waves-light btn-small btn-hero wow slideInUp"><i class="material-icons left">priority_high</i>Descubre De Que Se Trata!</a>

        <div class="container" style="margin-top:6em;">
            <div class="row">
                <form class="col s12" method="POST" action="<?php echo $helper->url("Login","identifier"); ?>">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="emailuser" class="validate" style="border-bottom: 1px solid white;">
                            <label for="email" style="color:white;">Email</label>
                            <span class="helper-text" data-error="Verifica tu correo" data-success="Perfecto!" style="color:white;">Ingresa tu correo para loguearte</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</div>
<div class="container-fluid" style="">
<?php foreach($allblocks as $blocks){
if($blocks->style_block_post == 2){ ?>
<div class="container-fluid">
    <div class="row" style="margin-bottom:0px;">
        <div class="col s12 m6 wow slideInLeft respMedia paroller" data-paroller-factor="0.5" data-paroller-type="foreground" style="height:500px; background-image:url('/ibrinezcoaching/media/img/<?= $blocks->image_block_1 ?>');">
        <div class="prehero">
            <div class="herotext"><?= $blocks->subtitle_block_1 ?></div>
        </div>
        </div>
        <div class="col s12 m6 wow slideInRight respMedia" data-paroller-factor="0.5" data-paroller-type="foreground" style="height:500px; background-image:url('/ibrinezcoaching/media/img/<?= $blocks->image_block_2 ?>');">
        
        <div class="prehero">
            <div class="herotext"><?= $blocks->subtitle_block_2 ?></div>
        </div>
        
        </div>
        <div class="col s12 m12 wow slideInUp respMedia" data-paroller-factor="0.5" data-paroller-type="foreground" style="height:500px; background-image:url('/ibrinezcoaching/media/img/<?= $blocks->image_block_3 ?>');">
        
        <div class="prehero">
            <div class="herotext-fluid"><?= $blocks->subtitle_block_3 ?></div>
        </div>
        
        </div>
    </div>
</div>
<?php } 
if($blocks->style_block_post == 8){ ?>
<div class="container-fluid style8">
    
    <div class="shadowcard">

    </div>

</div>
<?php }?>

<?php }?>
</div>

<script>
    new WOW().init();
    $(window).paroller();
</script>