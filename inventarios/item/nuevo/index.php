<?php
  $ruta="../../../";
  include_once($ruta."class/marca.php");
  $marca=new marca;
  include_once($ruta."class/umedida.php");
  $umedida=new umedida;
extract($_GET);
  session_start(); 
  //if (!isset($lblcode)) {
   // $query="";
   // $tituloSede="Contratos en todas las Sedes";
 // }
 // else{
  //  $query=" and idsede=".dcUrl($lblcode);
  //  $dSelSede=$admmodulo->mostrar(dcUrl($lblcode));
  //  $dSelSede=array_shift($dSelSede);
  //  $tituloSede="Contratos en Sede ".$dSelSede['nombre'];
 // }


?>
<!DOCTYPE html>
<html lang="es">
<head>

    <?php
      $hd_titulo="NUEVO ITEM";
      include_once($ruta."includes/head_basico.php");
      include_once($ruta."includes/head_tabla.php");
    ?>
 <style type="text/css">   
.btn, .btn-large {
  background-color: #2196F3;
}

button:focus {
   outline: none;
   background-color: #2196F3;
}

.btn:hover, .btn-large:hover {
   background-color: #64b5f6;
}
.bordeado{
  border: 1px solid #d8d8d8; 
  border-radius:5px;
}
.bordeado input[type=radio] {
    width: 50px;
    height: 50px;
}
</style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
 
</head>
<body>
    <?php
      include_once($ruta."head.php");
    ?>
    <div id="main">
      <div class="wrapper">
        <?php
          $idmenu=1120;
          include_once($ruta."aside.php");
        ?>
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
            <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="col s12 m12 l12">&nbsp;</div>
                </div>
              </div>   
            </div>
          </div>
         
           <div class="divider"></div>
          <div class="container">
              <div class="row">
                <div class="col s12 m12 l12">
                 
                 <form class="col s12" id="idform" name="idform" action="return false" onsubmit="return false" method="POST">
                    <div class="row">
                    <div class="col s12 m12 l2">&nbsp;</div>
                     <div class="col s12 m12 l8 " style="background-color:white;">
                     
                     <fieldset class="formulario">
                   <legend><div><i class="fa fa-plus"></i> <strong>Datos de Item</strong> </div></legend>
                            
                          <div class="input-field col s12 m6 l6">
                            <input id="idnombre" name="idnombre" type="text" class="validate">
                            <label for="idnombre">Nombre de Item</label>
                          </div>
                          <div class="input-field col s12 m6 l6">
                              <label>Unidad de medida</label>
                              <select id="idumedida" name="idumedida">
                                <option value="0">Seleccionar</option> 
                                <?php
                                  foreach($umedida->mostrarTodo("estado=1") as $f)
                                  {
                                    ?>
                                      <option value="<?php echo $f['idumedida']; ?>"><?php echo $f['short']; ?></option>
                                    <?php
                                  }
                                ?>
                              </select>
                          </div>
                          <div class="input-field col s6 m6 l6">
                            <input type="hidden" name="idmarca" id="idmarca">
                            <input id="idmarcaNombre" name="idmarcaNombre" readonly="" type="text" class="validate" placeholder="Preciona el botón seleccionar Marca">
                            <label for="idmarcaNombre">Marca</label>
                          </div>
                          <div class="input-field col s6 m6 l6">
                            <a id="btnMarcaSel" class="waves-effect waves-light btn-jh modal-trigger  blue" href="#modal1">Seleccionar Marca</a>
                          </div> 
                          <div class="input-field col s12 m12 l12">
                          </div>  
                        <!--  <div class="input-field col s12 m6 l6">
                            <input id="idfabricante" name="idfabricante" type="text" class="validate">
                            <label for="idfabricante">Fabricante</label>
                          </div>-->      
                          <div class="input-field col s12 m6 l6">
                            <input id="idminimo" name="idminimo" type="text" class="validate">
                            <label for="idminimo">Cantidad minimo en el almacén</label>
                          </div>                      
                              
                              <div class="input-field col col s12 m12">
                               <textarea id="iddesc" name="iddesc" class="materialize-textarea"></textarea>
                                <label for="iddesc">Descripcion</label>
                              </div>
 
                          <div class="col col s12 m12" align="right">
                            <!--  -->
                          </div>
                          <div class="col s12 m12 l12"  align="right">
                            <a href="../" class="btn waves-effect waves-light red"><i class="fa fa-reply"></i> </a>
                            <button id="btnSave" class="btn waves-effect cyan darken-4" onclick="guardar();"> <i class="fa fa-save"></i> Guardar </button>
                            
                            </div>
                           </fieldset>

                        </div>
                       <div class="col s12 m12 l2">&nbsp;</div>
                    </div>
                  </form>
                  
               </div>

              </div>
          </div>

          </div>
          <?php
            //include_once("../../footer.php");
          ?>
        </section>
      </div>
    </div>
    <div id="modal1" class="modal">
      <div class="modal-content">
        <fieldset class="formulario">
          <legend> Seleccionar Marca</legend>
          <form  class="col s12" id="idformMarca" name="idform" action="return false" onsubmit="return false" method="POST">
            <div class="row">
              <div class="input-field col col s12 m4">
                <input id="idNmarca" name="idNmarca" type="text" class="validate">
                <label for="idNmarca">Nombre de la Nueva Marca</label>
              </div>
              <div class="input-field col col s12 m4">
                <input id="idNdesc" name="idNdesc" type="text" class="validate">
                <label for="idNdesc">Descripcion nueva Marca</label>
              </div>
              <div class="input-field col col s12 m4">
                <button id="BtnSaveMarca" class="btn waves-effect green"><i class="fa fa-save"></i> Guaradar</button>
              </div>
            </div>
          </form>
          <table id="tablajson" class="display" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>COD</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Sel.</th>
              </tr>
            </thead>
            <tbody>                         
            </tbody>
          </table>
        </fieldset>
      </div>
    </div>
    <div id="idresultado"></div>
    <!-- end -->
    <!-- jQuery Library -->

    <?php
      include_once($ruta."includes/script_basico.php");
      include_once($ruta."includes/script_tabla.php");
    ?>

    <script type="text/javascript">
      $("#BtnSaveMarca").click(function(){

        var str = $( "#idformMarca" ).serialize();
        nmar=$('#idNmarca').val();
        if (nmar=='')
         {
          swal("ERROR!", "Completar datos", "error");
         }else{
           $.ajax({
            url: "../editar/nuevaMarca.php",
            type: "POST",
            data: str,
            success: function(resp){
              setTimeout(function(){     
                console.log(resp);
                $('#idresultado').html(resp);
              }, 1000); 
            }
          });
          }
      });
      $("#btnMarcaSel").click(function(){
        listarMarcas();
      });
      function listarMarcas(){
        $("#tablajson").dataTable().fnDestroy();
        var table=$("#tablajson").dataTable({
          "ajax":{
            "method":"POST",
            "url":"../editar/lsitarMarcas.php"
          },
          "columns":[
            {"data":"idmarca"},
            {"data":"nombre"},
            {"data":"desc"},
            {"defaultContent":"<a class='btn-jh purple ideditar'><i class='mdi-navigation-check'></i> Seleccionar</a>"}
          ],
        });
        GetData("#tablajson tbody",table);
      }
      function GetData(tbody,table){
        $(tbody).on("click","a.ideditar",function(){
          var data=table.api().row( $(this).parents("tr") ).data();        
          console.log(data);
          $("#idmarcaNombre").val(data.nombre);
          $("#idmarca").val(data.idmarca);
          $('#modal1').closeModal();
        });
      }
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true
      });
     
     
    //selecciones de comboDSA
    
  });

     function guardar()
       {   
          if (validar()) {                 
                var str = $( "#idform" ).serialize();
                $.ajax({
                  url: "guardar.php",
                  type: "POST",
                  data: str,
                  success: function(resp){     
                      console.log(resp);
                      $('#idresultado').html(resp);
                      $('#btnSave').attr("disabled",true);
                    }
                  });
          }else{
             swal("ERROR!", "Completar datos", "error")
          }
       }
  
      function validar(){

        retorno=true;
        nom=$('#idnombre').val();
        mar=$('#idmarca').val();
        ume=$('#idumedida').val();
        if(nom=="" || mar=="" || ume==""){
          retorno=false;
        }
        return retorno;
      }
  
      function validaFloat(numero)
      {
        if (!/^([0-9])*[.]?[0-9]*$/.test(numero))
        {
          swal("ERROR!", "Ingrese precio valido", "error");
          $('#idprecio').val("");
        }
         
      }

    </script>
</body>

</html>