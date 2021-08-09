<!-- Todo: acceso solo admin -->
@include('master')
@section('contenido')
    <div class="row mt-2 mt-3">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card text-dark bg-dark">
                <div class="card-header bg-dark text-white text-center">
                    <span>Agregar Materiales</span>
                </div>
                <div class="card-body">
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="form-control">Tipo de Material</label> 
                        <select class="form-select" style="background-color: grey; color: honeydew;" step="500" id="agregar-materiales">
                            <option value="todos">Otros</option>
                            <option value="madera">Madera</option>
                            <option value="ladrillo">Ladrillo</option>
                            <option value="cemento">Cemento</option>
                            <option value="pintura">Pintura</option>
                            <option value="clavosTornillos">Clavos o tornillos</option>
                        </select>
                    </div>
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="nombreH-txt">Nombre del material</label>
                        <input type="text" id="nombreM-txt" class="form-control" style="background-color: grey; color: honeydew;">
                    </div>
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="precioH-txt">Precio del material</label>
                        <input type="number" id="precioM-txt" class="form-control form-control-bg" style="background-color: grey; color: honeydew;" step="500" >
                    </div>
                    <div class="mb-3 bg-dark text-white text-center">
                        <label for="nombreM-txt">Descripción del material</label>
                        <input type="text" id="descripcionM-txt" class="form-control" style="background-color: grey; color: honeydew;">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="mb-3 text-center">
                    <input type="checkbox" class="btn-check" id="agregarM-btn">
                    <label class="btn btn-dark" for="btn-check">Aceptar</label>
                </div>
            </div>
        </div>
    </div>
@endsection