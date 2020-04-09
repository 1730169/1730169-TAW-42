@extends('default')
@section('content')
<br>
<form action="<?php echo $action; ?>" type="POST">
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Gamer</h5>
    </div>
    
    <div class="card-body">
        <div class="row">
          
            <div class="col-md-6">
            
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo isset($gamer->nombre)? $gamer->nombre : ''; ?>" required>
              </div>

              <div class="form-group">
                <label>Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?php echo isset($gamer->apellidos)? $gamer->apellidos : ''; ?>" required>
              </div>

              <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha_nac" value="<?php echo isset($gamer->fecha_nac)? $gamer->fecha_nac : ''; ?>" required>
              </div>

              <div class="form-group">
                <label>Género</label>
                <select class="form-control" name="genero" required>
                  <option value="0">Hombre</option>
                  <option value="1">Mujer</option>
                </select>
              </div>

              <div class="form-group">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo isset($gamer->telefono)? $gamer->telefono : ''; ?>">
              </div>
  
            </div>
            <div class="col-md-6">
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">Correo electrónico</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo isset($gamer->email)? $gamer->email : ''; ?>">
              </div>

              <div class="form-group">
                <label>GamerTag</label>
                <input type="text" class="form-control" name="gamertag" value="<?php echo isset($gamer->gamertag)? $gamer->gamertag : ''; ?>" required>
              </div>
              
              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="password" value="<?php echo isset($gamer->contrasena)? $gamer->contrasena : ''; ?>" required>
              </div>

              <div class="form-group">
                <label>Redes Sociales</label>
                <textarea class="form-control" name="redes_sociales" ><?php echo isset($gamer->contrasena)? $gamer->contrasena : ''; ?></textarea>
              </div>


            </div>

            
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection