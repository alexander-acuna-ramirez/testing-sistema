 @extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Proveedores</h1>
    </div>
    <div class="card shadow mb-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Crear nuevo Proveedor</h6>
            </div>
            <div class="card-body">
                    <div class="alert alert-danger d-none" id="alerts">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="Razon_Social">Razon Social </label>
                            <input type="text" class="form-control" name="Razon_Social" id="Razon_Social" placeholder="Nombre de la empresa">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="RUC">Numero de RUC</label>
                            <input type="text" class="form-control" name="Razon_social" id="Razon_social" placeholder="Debe tener 11 digitos">
    
                        </div>
                        <br>
                    </div>
                    <br>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0" aling="center">
                                <thead>
                                <tr>
                                    <th width="100%">Telefono</th>
                                </tr>
                                </thead>
                                <tbody id="telefonoBody">
                                    <tr>
                                        <td>
                                            <button id="addSupplier" class="btn btn-primary" title="Agregar proveedor">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0" aling="center">
                                <thead>
                                <tr>
                                    <th width="100%">Correo</th>
                                </tr>
                                </thead>
                                <tbody id="correoBody">
                                    <tr>
                                        <td>
                                            <button id="addSupplier" class="btn btn-primary" title="Agregar proveedor">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0" aling="center">
                                <thead>
                                <tr>
                                    <th width="100%">Direccion</th>
                                </tr>
                                </thead>
                                <tbody id="direccionBody">
                                    <tr>
                                        <td>
                                            <button id="addSupplier" class="btn btn-primary" title="Agregar proveedor">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-1 float-right">
                    <button class="btn btn-success mx-1" title="Guardar" id="saveEverything">
                        <i class="fas fa-save"></i>
                    </button>
                    <a class="btn btn-danger" title="Cancelar" href="{{url('/supplier')}}">
                        <i class="fas fa-ban"></i>
                    </a>
                </div>
            </div>
        </div>
</div>
@endsection
@section('js')
    <script src="{{asset('/js/assets/suppliers.js')}}"></script>
@endsection