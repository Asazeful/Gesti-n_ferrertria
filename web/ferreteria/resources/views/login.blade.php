@include('master')
@section('contenido')
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12 mx-auto mt-5">
            <div class="card text-dark bg-dark">
                <div class="card-header text-white">
                    <span>Ingrese su cuenta</span>
                </div>
                <div class="card-body text-white">
                    <div class="mb-3 text-white">
                        <label for="usuario-txt">Usuario</label>
                        <input type="text" id="usuario-txt" class="form-control" placeholder="mail@example.com" style="background-color: grey; color: honeydew;">
                    </div>
                    <div class="mb-3 text-white">
                        <label for="pass-txt">Contraseña</label>
                        <input type="password" id="pass-txt" class="form-control" placeholder="********" style="background-color: grey; color: honeydew;">
                    </div>     
                </div>
                <div  class="mb-3 text-center text-white">
                    <input type="checkbox" class="btn-check" id="login-btn">
                    <label class="btn btn-success" for="btn-check" >Aceptar</label>
                </div>
                <div class="form-check form-switch mb-3" style="align-self: center;">

                    <label class="form-check-label text-white" for="flexSwitchCheckDefault">¿Es usted un admin?</label>
                    <input class="form-check-input" type="checkbox" id="admin-swt">
                </div>
            </div>
        </div>   
    </div> 
@endsection