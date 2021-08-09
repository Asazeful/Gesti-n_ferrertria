<!-- Todo: acceso solo como admin -->
@include('master')
@section('contenido')
    <div class="row mt-2 mt-3">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card text-dark bg-dark">
                <div class="card-header bg-dark text-white text-center">
                    <span>Agregar Herramientas</span>
                </div>
                <div class="card-body">
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="form-control">Tipo de herramienta</label> 
                        <select class="form-select" style="background-color: grey; color: honeydew;" id="agregar-herramienta">
                            <option value="destornillador">Destornillador</option>
                            <option value="martillo">Martillo</option>
                            <option value="brocha">Brocha</option>
                            <option value="rodillo">Rodillo</option>
                        </select>
                    </div>
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="nombreH-txt">Nombre de la herramienta</label>
                        <input type="text" id="nombreH-txt" class="form-control" style="background-color: grey; color: honeydew;">
                    </div>
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="precioH-txt">Precio de la herramienta</label>
                        <input type="number" id="precioH-txt" class="form-control form-control-bg" style="background-color: grey; color: honeydew;" step="500" >
                    </div>
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="nombreM-txt">Descripción de la herramienta</label>
                        <input type="text" id="descripcionH-txt" class="form-control" style="background-color: grey; color: honeydew;">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="mb-3 text-center">
                    <input type="checkbox" class="btn-check" id="agregarH-btn">
                    <label class="btn btn-dark" for="btn-check">Aceptar</label>
                </div>
            </div>
        </div>
    </div>
@endsection