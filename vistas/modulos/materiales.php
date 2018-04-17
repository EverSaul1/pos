<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar material
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar material</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMaterial">
          
          Agregar material

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

            $materiales = ControladorMaterial::ctrMostrarMaterial($item, $valor);

            foreach ($materiales as $key => $value) {
              echo '<tr>
            <td>'.($key+1).'</td>
            <td class = "text-uppercase">'.$value["material"].'</td>
            
            <td>
              <div class="btn-group">
                  
                <button class="btn btn-warning btnEditarMaterial" data-toggle = "modal" idMaterial = "'.$value["id"].'" data-target = "#modalEditarMaterial"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

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

<div id="modalAgregarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar material</h4>

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

                <input type="text" class="form-control input-lg" name="nuevoMaterial" placeholder="Ingresar Material" required>

              </div>

            </div>
          </div>
            </div>

           

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Material</button>

        </div>

        <?php
            $crearMaterial = new ControladorMaterial();
            $crearMaterial -> ctrCrearMaterial();
        ?>

      </form>

    </div>

  </div>

</div>
<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalEditarMaterial" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar material</h4>

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

                <input type="text" class="form-control input-lg" name="editarMaterial" id = "editarMaterial" required>
                 <input type="hidden"  name="idMaterial" id = "idMaterial" required>

              </div>

            </div>
          </div>
            </div>

           

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Material</button>

        </div>

        <?php

              $editarMaterial = new ControladorMaterial();
              $editarMaterial -> ctrEditarMaterial();

            ?>

       

      </form>

    </div>

  </div>

</div>


