<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar tipos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar tipos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTipo">
          
          Agregar tipo

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Tipo</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $tipos = ControladorTipo::ctrMostrarTipo($item, $valor); 

          foreach ($tipos as $key => $value) {

            echo '

            <tr>
            <td>'.($key+1).'</td>
            <td class = "text-uppercase">'.$value["tipo"].'</td>
            
            <td>
              <div class="btn-group">
                  
                <button class="btn btn-warning btnEditarTipo" data-toggle = "modal" idTipo = "'.$value["id"].'" data-target = "#modalEditarTipo"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger btnEliminarTipo" idTipo = "'.$value["id"].'"><i class="fa fa-times"></i></button>

              </div>  

            </td>

          </tr>';

            
          }

        ?>
          
          
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarTipo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar tipo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTipo" placeholder="Ingresar Tipo" required>

              </div>

            </div>
          </div>
            </div>

           

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar tipo</button>

        </div>

        <?php

        $crearTipo = new ControladorTipo();
        $crearTipo -> ctrCrearTipo();
        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL Editar tipo
======================================-->

<div id="modalEditarTipo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar tipo</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTipo" id="editarTipo"  required>

                <input type="hidden"  name="idTipo" id="idTipo"  required>

              </div>

            </div>
          </div>
            </div>

           

        <!--=====================================
        PIE DEL MODAL



        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

        <?php

        $editarTipo = new ControladorTipo();
        $editarTipo -> ctrEditarTipo();
        ?>

       
      </form>

    </div>

  </div>

</div>


