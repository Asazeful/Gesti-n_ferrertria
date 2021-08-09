@include('master')
@section('contenido')
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card bg-dark text-white text-center">
                <div class="card-header bg-dark text-white">
                    <span>Filtrar por herramienta</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtroH-cbx" style="background-color: grey; color: honeydew;">
                        <option value="todos">Todos</option>
                        <option value="destornillador">Destornillador</option>
                        <option value="martillo">Martillo</option>
                        <option value="brocha">Brocha</option>
                        <option value="rodillo">Rodillo</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-dark text-secondary">
                    <tr>
                        <td>Tipo</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Descripcción</td>
                        <td>Comprar</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card bg-dark text-white text-center">
                <div class="card-header bg-dark text-white">
                    <span>Filtrar por tipo de material</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtroM-cbx" style="background-color: grey; color: honeydew;">
                        <option value="todos">Todos</option>
                        <option value="madera">Madera</option>
                        <option value="ladrillo">Ladrillo</option>
                        <option value="cemento">Cemento</option>
                        <option value="pintura">Pintura</option>
                        <option value="clavosTornillos">Clavos o tornillos</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-dark text-secondary">
                    <tr>
                        <td>Tipo</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Descripcción</td>
                        <td>Comprar</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola">

                </tbody>
            </table>
        </div>
    </div>

@endsection