<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administrar Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Administrar usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <!-- Default box -->
        <div class="card">

            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
                    AGREGAR USUARIO
                </button>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Último Login</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Usuario Administrador</td>
                        <td>Admin</td>
                        <td><img src="vistas/img/usuarios/default/user-default.jpg" class="img-thumbnail" width="40px">
                        </td>
                        <td>Administrador</td>
                        <td>
                            <button class="btn btn-success btn-xs">Activado</button>
                        </td>

                        <td>2017-12-11 12:05:32</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Usuario Administrador</td>
                        <td>Admin</td>
                        <td><img src="vistas/img/usuarios/default/user-default.jpg" class="img-thumbnail" width="40px">
                        </td>
                        <td>Administrador</td>
                        <td>
                            <button class="btn btn-success btn-xs">Activado</button>
                        </td>

                        <td>2017-12-11 12:05:32</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Usuario Administrador</td>
                        <td>Admin</td>
                        <td><img src="vistas/img/usuarios/default/user-default.jpg" class="img-thumbnail" width="40px">
                        </td>
                        <td>Administrador</td>
                        <td>
                            <button class="btn btn-success btn-xs">Activado</button>
                        </td>

                        <td>2017-12-11 12:05:32</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--=============================================
MODAL USUARIOS
=============================================-->
<!-- The Modal -->
<div class="modal" id="modalAgregarUsuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <!--=============================================
                MODAL HEADER
                =============================================-->
                <div class="modal-header" style="background: #3c8dbc; color: white">

                    <h4 class="modal-title">Agregar Usuario</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <!--=============================================
                MODAL BODY
                =============================================-->
                <div class="modal-body">


                    <div class="form-group">

                        <label for="email">Nombre</label>
                        <input type="text" class="form-control" placeholder="Ingrese su nombre" id="nuevoNombre"
                               name="nuevoNombre">

                    </div>

                    <div class="form-group">

                        <label for="pwd">Usuario:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su usuario" id="nuevoUsuario"
                               name="nuevoUsuario">

                    </div>

                    <div class="form-group">

                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" id="nuevoPassword" name="nuevoPassword">

                    </div>

                    <div class="form-group">

                        <label for="pwd">Contraseña:</label>
                        <select class="form-control input-lg" name="nuevoPerfil">
                            <option value="">Seleccionar perfil</option>
                            <option value="">Administrador</option>
                            <option value="">Especial</option>
                            <option value="">Vendedor</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <label for="pwd">Subir Foto:</label>
                        <input type="file" class="" id="nuevaFoto" name="nuevaFoto">
                        <p class="note-help-block"> Peso máximo de la foto 200 MB</p>
                        <img src="vistas/img/usuarios/default/user-default.jpg" class="img-thumbnail" width="100px">

                    </div>


                </div>

                <!--=============================================
                MODAL FOOTER
                =============================================-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Guardar usuario</button>

                    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Salir</button>

                </div>
            </form>
        </div>
    </div>
</div>