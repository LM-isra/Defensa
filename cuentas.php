<?php
    session_start();
    if($_SESSION==null){
        header("Location: index.php");
    }
    if($_SESSION['tipo']!=0){ 
        header("Location: ingreso.php");
    }
?>

<!doctype html>
<html lang="es">
                      
	<head>
        <meta charset=UTF-8>
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
        <link rel="stylesheet" type="text/css" href="css/DataTables/media/css/jquery.dataTables.csss">
        <link rel="stylesheet" type="text/css" href="css/DataTables/media/css/jquery.dataTables_themeroller.css">
        <script type="text/javascript" language="javascript" src="css/DataTables/media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="css/DataTables/media/js/jquery.dataTables.js"></script>

                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
                <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css.map">
                <link rel="stylesheet" type="text/css" href="css/head.css">
                <link rel="stylesheet" type="text/css" href="css/body.css">        
                <link rel="stylesheet" type="text/css" href="css/footer.css">
                <link rel="stylesheet" type="text/cs s" href="css/main.css">
                <link rel="stylesheet" type="text/css" href="css/menu.css">
                <link rel="stylesheet" type="text/css" href="css/cuerpo.css">
                <script type="text/javascript" src="css/bootstrap/js/bootstrap.js"></script>

                <script type="text/javascript" >
                    $(document).ready(function() {
                    $("#tabla").DataTable();
                } );

                </script>
    </head>
    
<body>
    <?php
        if(isset($_GET['errorid'])){ 
            echo "
                <div id='sub' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog '>
                        <div class='modal-body'>
                            <div class=' alert alert-danger'>
                                Este Id ya fue registrada <span class='glyphicon glyphicon-'></span>
                                <span class='close' data-dismiss='modal'><button type='button' class='btn btn-default btn-xs' ><b>Aceptar</b></button></span>            
                            </div>
                        </div>
                    </div>
                </div>
                <script language='javascript'>
                    $('#sub').modal({
                        show: true
                    })
                </script>"; 
        }else{ 
            echo ""; 
        } 
    ?>
    <?php
        if(isset($_GET['errorcontra'])){ 
            echo "
                <div id='sub' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog '>
                        <div class='modal-body'>
                            <div class=' alert alert-danger'>
                                Las dos contraseñas no coinciden <span class='glyphicon glyphicon-'></span>
                                <span class='close' data-dismiss='modal'><button type='button' class='btn btn-default btn-xs' ><b>Aceptar</b></button></span>            
                            </div>
                        </div>
                    </div>
                </div>
                <script language='javascript'>
                    $('#sub').modal({
                        show: true
                    })
                </script>"; 
        }else{ 
            echo ""; 
        } 
    ?>
    <?php
        if(isset($_GET['errorci'])){ 
            echo "
                <div id='sub' class='modal fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog '>
                        <div class='modal-body'>
                            <div class=' alert alert-danger'>
                                Este Cedula de Identidad ya fue registrada <span class='glyphicon glyphicon-'></span>
                                <span class='close' data-dismiss='modal'><button type='button' class='btn btn-default btn-xs' ><b>Aceptar</b></button></span>            
                            </div>
                        </div>
                    </div>
                </div>
                <script language='javascript'>
                    $('#sub').modal({
                        show: true
                    })
                </script>"; 
        }else{ 
            echo ""; 
        } 
    ?>
    <div id="main" class=row-fluid>
        <div id="head" class ="col-lg-12 row-fluid" > 
            <div class="col-lg-9"> 
                <p class="banner-text"> Hospital Periferico de Coche</p>
            </div>
            <div class="col-lg-3"> </div> 
                <p class="banner-text"> <span class="glyphicon glyphicon-user btn-lg"></span> <?php echo "Hola ".$_SESSION['nombre']. " ".$_SESSION['apellido'] ?> 
                    <a href="index.php"><span class="glyphicon glyphicon-remove btn-lg"> </span></a> </p>
                
        </div>
        <div id="cuerpo" class ="row-fluid" > 
            
                <div id="menu" class=" well col-lg-2"> 
                        <a href="inicio.php">
                            <div class="row">
                                
                            </div>
                        </a>
                        <div class="row-fluid">
                            <div class="col-lg-12">    
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default panelmio">
                                    <h4 class="panel-title">        
                                        <a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                Material Esteril
                                            </div>
                                        </a>
                                    </h4>    
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="permanente.php">
                                                         
                                                        <div class="row-fluid"> 
                                                           <span class="glyphicon glyphicon-chevron-right"> </span> Permanente
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="prestamo-permanente.php">
                                                         
                                                        <div class="row-fluid "> 
                                                           <span class="glyphicon glyphicon-chevron-right"> </span> Prestamo/Per
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="salidad-entrada.php"> 
                                                         
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> Salidad/Entrada
                                                        </div> 
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default panelmio">
                                        <h4 class="panel-title">    
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">    
                                                <div class="panel-heading" role="tab" id="headingTres">
                                                   Inyectadoras
                                                </div>
                                            </a>
                                        </h4>    
                                        <div id="collapseCuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCuatro">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="total.php"> 
                                                        <div class="row-fluid">
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> 
                                                            Total
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="general.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            General
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="turno.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Turno
                                                        </div> 
                                                    </a>
                                                </h4>
                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default panelmio">
                                        <h4 class="panel-title">    
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">    
                                                <div class="panel-heading" role="tab" id="headingCinco">
                                                   Agregar
                                                </div>
                                            </a>
                                        </h4>    
                                        <div id="collapseCinco" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingCinco">
                                            <div class="panel-body">
                                                <h4 class="panel-title">    
                                                    <a href="unidad.php"> 
                                                        <div class="row-fluid">
                                                            <span class="glyphicon glyphicon-chevron-right"> </span> 
                                                            Unidad
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="Medico.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Medico
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="paciente.php"> 
                                                        <div class="row-fluid"> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Paciente
                                                        </div> 
                                                    </a>
                                                </h4>
                                                <h4 class="panel-title">    
                                                    <a href="cuentas.php"> 
                                                        <div class="row-fluid resaltar "> 
                                                            <span class="glyphicon glyphicon-chevron-right"> </span>
                                                            Cuentas
                                                        </div> 
                                                    </a>
                                                </h4>    
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="panel panel-default panelmio">
                                        <h4 class="panel-title">    
                                            <a href="control-auto-clave.php">    
                                                <div class="panel-heading" role="tab">
                                                    Control Auto Clave
                                                </div>
                                            </a>
                                        </h4>    
                                        
                                    </div>
                                </div>
                            </div>        
                        </div>        
                         
                         <div class="row-fluid">
                           <div class="col-lg-12 item" id="ubv-logo2"> </div>
                        </div>
                </div>

                
                <div class="col-lg-9">
                    <div class="col-lg-2"> </div>
                    <div class="col-lg-10 row-fluid cuerpo-top" >
                        <div><p class="text-pagina"> Cuentas</p>
                            <table id = "tabla" class="table table-hover table-bordered s">
                                <thead>
                                    <tr class="active">
                                        
                                        <td>Cedula</td>
                                        <td>Nombre</td>
                                        <td>Apellido</td>
                                        <td>User</td>
                                        <td>Tipo</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        include_once "conexion.php";
                                        $sql = 'SELECT cod, ci, nombre, apellido, id, tipo FROM t_usuario';
                                        $result = pg_query($sql) or die('ERROR BD');
                                        $columna = pg_numrows($result);
                                        
                                        for($i=1; $i<=$columna; $i++){
                                            
                                            $dato = pg_fetch_array($result);
                                            if($i!=1){
                                                       
                                                        echo"<tr>";
                                                        echo "<td> $dato[ci]</td>";
                                                        echo "<td> $dato[nombre]</td>";
                                                        echo "<td> $dato[apellido]</td>";
                                                        echo "<td> $dato[id]</td>";
                                                    echo "<td>"; 
                                                        if($dato['tipo']==0){
                                                            echo "Administrador";
                                                        }else{
                                                            echo "Estandar";
                                                        }
                                                        echo "</td>";
                                                       
                                                       
                                                        echo"</td>";
                                                        echo "<td> <button type='button' id='edit' class='btn btn-primary btn-sm glyphicon glyphicon-pencil' data-toggle='modal' data-target='#bs-edit-modal-sm$i'>   </button </td>";
                                                        echo "<td> <button type='button' id='edit' class='btn btn-danger btn-sm glyphicon glyphicon-remove' data-toggle='modal' data-target='#bs-remove-modal-sm$i'>   </button </td>";
                                                    
              
                                                    echo "<div class='modal fade' id='bs-remove-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                                        echo "<div class='modal-dialog'>";
                                                        echo "<div class='modal-dialog modal-sm'>";    
                                                        echo"<div class='modal-content'>";
                                                                echo "<div class='modal-header'>";
                                                                    echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                        echo "<h4 class='modal-title' id='myModalLabel'>Eliminar</h4>";
                                                                echo "</div>";
                                                                    echo "<div class='modal-body'>";
                                                                        echo "<form method='POST' action='eliminar-id.php' name='cuentas'>";
                                                                        echo " ¿Estas Seguro que quieres eliminar $dato[id]?";
                                                                        echo "<input type='hidden' class='form-control' value='$dato[cod]' name='cod' placeholder=''>   ";
                                                                        
                                                                    echo "</div>";
                                                                echo "<div class='modal-footer'>";
                                                                echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>";
                                                                echo "<button type='submit' class='btn btn-danger'>Eliminar</button>";
                                                                echo" </div>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo "</form>";
                                                    echo "</div>";
                                                    echo "</div> ";
                                                    
                                                    
                                                    echo "<div class='modal fade' id='bs-edit-modal-sm$i' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>";
                                                        echo "<div class='modal-dialog'>";
                                                        echo "<div class='modal-dialog modal-sm'>";    
                                                        echo"<div class='modal-content'>";
                                                                echo "<div class='modal-header'>";
                                                                    echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                                                                        echo "<h4 class='modal-title' id='myModalLabel'>Editar</h4>";
                                                                echo "</div>";
                                                                    echo "<div class='modal-body'>";
                                                                        
                                                                        echo " <form  method='POST' action='editar-id.php' name='cuentas'>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Cedula</label>";
                                                                                echo "<input type='text' class='form-control' required pattern='[V,v,E,e]{1}[0-9]{7,8}' name='ci' value='$dato[ci]'>";
                                                                            echo "</div>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Nombre</label>";
                                                                                echo "<input type='text' class='form-control' required name='nombre' value='$dato[nombre]'>";
                                                                            echo "</div>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Apellido</label>";
                                                                                echo "<input type='text' class='form-control' required name='apellido' value='$dato[apellido]'>";
                                                                            echo "</div>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Nick</label>";
                                                                                echo "<input type='text' class='form-control' required name='id' value='$dato[id]'>";
                                                                            echo "</div>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Clave</label>";
                                                                                echo "<input type='password' class='form-control' required name='pass' placeholder='*****'>";
                                                                            echo "</div>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Confirmar Clave</label>";
                                                                                echo "<input type='password' class='form-control' required name='pass2' placeholder='*****'>";
                                                                            echo "</div>";
                                                                            echo "<div class='form-group'>";
                                                                                echo "<label>Tipo</label>";
                                                                                echo "<select class='form-control' name='tipo'>";
                                                                                echo "<option value='0'>Adiminstrador</option>";
                                                                                echo "<option value='1'>Estandar</option>";
                                                                                echo "</select>";
                                                                                
                                                                                echo " <br>¿Estas seguro que quieres editar $dato[id]?";
                                                                                    echo "<input type='hidden' class='form-control' value='$dato[cod]' name='cod' placeholder=''>   ";
                                                                            echo "</div>";
                                                                    echo "</div>";
                                                                echo "<div class='modal-footer'>";
                                                                echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>";
                                                                echo "<button type='submit' class='btn btn-primary'>Editar</button>";
                                                                echo" </div>";
                                                            echo "</div>";
                                                        echo"</form>";
                                                    echo "</div>";
                                                    echo "</div> ";
                                                    echo "</div> ";
                                                }    
                                            }     
                                                
                                                
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                        <!-- Button trigger modal -->
                        <br>
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target=".bs-example-modal-sm">
                            Nueva cuenta <span class="glyphicon glyphicon-plus"> </span> 
                        </button>

                        <!-- Modal -->
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Nueva Cuenta</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="ingreso-id.php" name="cuentas">
                                <div class="form-group">
                                    <label>Cedula</label>
                                    <input type="text" class="form-control" required pattern="[V,v,E,e]{1}[0-9]{7,8}" name="ci" placeholder="Cedula">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" required name="nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" required name="apellido" placeholder="Apellido">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" required name="id" placeholder="Nick del Usuario">
                                </div>
                                <div class="form-group">
                                    <label>Clave</label>
                                    <input type="password" class="form-control" required name="pass" placeholder="Clave">
                                </div>
                                <div class="form-group">
                                    <label>Confirmar Clave</label>
                                    <input type="password" class="form-control"  required name="pass2" placeholder="Confirmar Clave">
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Cuenta</label>
                                    <select class="form-control" name="tipo">
                                        <option value="0">Administrador</option>
                                        <option value="1">Estandar</option>
                                    </select>
                                </div>                                
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger btn-sm">Guardar</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                    
                    </div>
                </div>
        </div>
    </div>
    
</body>
</html>
