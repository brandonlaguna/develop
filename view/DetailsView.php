
        <form action="<?php echo $helper->url("usuarios","edit"); ?>" method="post" class="col-lg-5">
            <h3>Editar a <?=$user->nombre;?></h3>
            <hr/>
            <input type="hidden" name="id" value="<?=$user->id;?>"/>
            Nombre: <input type="text" name="nombre" class="form-control" value="<?=$user->nombre;?>" />
            Apellido: <input type="text" name="apellido" class="form-control" value="<?=$user->apellido;?>"/>
            Email: <input type="text" name="email" class="form-control" value="<?=$user->email;?>"/>
            Contraseña: <input type="password" name="password" class="form-control"/>
            <input type="submit" value="Editar" class="btn btn-success"/>
        </form>