<title>Ibrinezcoaching <?=$tag?></title>
<div class="container-fluid" style="background:white; height:auto; position:absolute;">
<h1>Crea una cita, entrevista o reunion llenando los campos de este formulario</h1>
<div class="container">
<form action="<?php echo $helper->url("Form","savedate"); ?>" method="POST">
<div class="row">
    <form class="col s12">
      <div class="row">
      <input type="hidden" name="newscheduled" id="newscheduled" value="ok">
      <!--First Name-->
        <div class="input-field wow slideInUp col s6">
            <input id="first_name" type="text" class="validate" name="first_name" required>
            <label for="first_name">Nombres</label>
        </div>
        <!--Last Name-->
        <div class="input-field wow slideInUp col s6">
          <input id="last_name" type="text" class="validate" name="last_name" required>
          <label for="last_name">Apellidos</label>
        </div>
      </div>
      <!--Define Date-->
      <div class="row">
        <div class="input-field wow slideInUp col s3">
        <input type="text" class="datepicker" name="scheduled_date" required>
          <label for="disabled">Definir Fecha de la cita</label>
        </div>
        <!--Define Time-->
        <div class="input-field wow slideInUp col s3">
        <input type="text" class="timepicker" name="scheduled_time">
          <label for="disabled">Hora especifica</label>
        </div>
      <!--Actual Date-->
        <div class="input-field wow slideInUp col s6">
          <input disabled name="actual_date" value="<?=date("l jS F Y")?>" id="disabled" type="text" class="validate">
          <label for="disabled">Fecha Actual</label>
        </div>
      </div>
      <!--Email-->
      <div class="row">
        <div class="input-field wow slideInUp col s12" required>
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <!--Phone-->
      <div class="row">
        <div class="input-field wow slideInUp col s12" required>
          <input id="phone" type="text" class="validate" name="phone">
          <label for="phone">Telefono</label>
        </div>
      </div>
      <!--City-->
      <div class="row">
        <div class="input-field wow slideInUp col s6">
          <input id="city" type="text" class="validate" name="city" required>
          <label for="city">Ciudad</label>
        </div>
        <!--Address-->
      
        <div class="input-field wow slideInUp col s6">
          <input id="address" type="text" class="validate" name="address">
          <label for="address">Direccion</label>
        </div>
    </div>
      
    <!--Text Area-->
    <div class="row">
        <div class="input-field wow slideInUp col s12">
          <textarea id="textarea1" class="materialize-textarea" name="message" data-length="180"></textarea>
          <label for="textarea1">Mensaje</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field wow slideInUp col s12">
          <textarea id="textarea2" class="materialize-textarea" name="message2" data-length="180"></textarea>
          <label for="textarea2">mensaje 2</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light wow slideInUp" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
     </button>
    </form>
  </div>

  
</form>
</div>
</div>

<script>
    new WOW().init();
    $(window).paroller();
</script>