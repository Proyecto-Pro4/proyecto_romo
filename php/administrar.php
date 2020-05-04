<?php include("../includes/admin/header.php"); ?>
<!------------------------------------------------------------------------->
<!--NAVI-->
<!------------------------------------------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="../img/logo.jpg" alt="CECESOFT" height="38" width="" style="box-align: left">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <button id="crear" type="submit" class="btn btn-primary">Crear</button>
                </li>
                <li class="nav-item">
                    <button id="eliminar" type="submit" class="btn btn-danger">Eliminar</button>
                </li>
                <li class="nav-item">
                    <div class="container">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-info">Filtrar</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                    <a class="dropdown-item" href="#">Fecha de creacion</a>
                                    <a class="dropdown-item" href="#">Area de Sistemas</a>
                                    <a class="dropdown-item" href="#">Area de Contabilidad</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">&laquo;</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <form class="form-inline my-2 my-lg-0">
                        <input id="buscador" class="form-control mr-sm-2" type="text" placeholder="Buscar... (ej. numero de referencia)">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!------------------------------------------------------------------------->
<!--SIDE NAVI-->
<!------------------------------------------------------------------------->
<div class="wrapper">
    <div class="sidebar">
        <h2>Administración</h2>
        <h3>de contratos</h3>
        <ul>
            <li><a href="#"><i class="fas fa-file-contract"></i>Contratos</a></li>
            <li><a href="../php/crearEmpleado.php"><i class="fas fa-users"></i>Empleados</a></li>
        </ul>
    </div>
</div>
<!------------------------------------------------------------------------->
<!--TABLE-->
<!------------------------------------------------------------------------->
<div class="container">
    <table id="tabla" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Type</th>
                <th scope="col">Referencia de contrato</th>
                <th scope="col">Empleado</th>
                <th scope="col">Cargo de trabajo</th>
                <th scope="col">Inicio del contrato</th>
                <th scope="col">Fin del contrato</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <th scope="row">Active</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
            <tr>
                <th scope="row">Default</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
            </tr>
        </tbody>
    </table>
</div>
<!------------------------------------------------------------------------->
<?php include("../includes/admin/footer.php"); ?>