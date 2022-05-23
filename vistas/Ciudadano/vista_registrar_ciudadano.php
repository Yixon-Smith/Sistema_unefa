<link type="text/css" rel="stylesheet" href="_recursos/input-file/css/disenio_input.css">
<div class="contendor_kn">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2><b>REGISTRO DE ESTUDIANTE</b></h2>
    </div>
    <div class="panel-body">     
          <div class="col-md-12 col-lg-12 col-xs-12"> 
            <div class="col-sm-4">
                <label>Nombres</label>
                <input id="txtnombre"  onkeypress="return soloLetras(event)"  type="text" style="background-color: #FFFFFF"  placeholder="Ingrese nombre de la persona" class="form-control" >
                <br>
            </div>
            <div class="col-sm-4">
                <label >Apellido Paterno</label>
                <input type="text" class="form-control" id="txtapellidopaterno" onkeypress="return soloLetras(event)"    style="background-color: #FFFFFF"    placeholder="Ingrese Apellido Paterno">
                <br>
            </div>
            <div class="col-sm-4">
                <label >Apellido Materno</label>
                <input type="text" class="form-control" id="txtapellidomaterno" onkeypress="return soloLetras(event)" style="background-color: #FFFFFF" placeholder="Ingrese Apellido Materno">
                <br>
            </div>          
            <div class="col-sm-4">
                <label >Direcci&oacute;n</label>
                <input type="text" class="form-control" id="txtdireccion" style="background-color: #FFFFFF" placeholder="Ingrese Direccion">
                <br>
            </div>
            <div class="col-sm-4">
                <label >Documento Identidad</label>
                <input type="text" class="form-control" id="txtdni" onkeypress="return soloNumeros(event)"   maxlength="8" style="background-color: #FFFFFF" placeholder="Ingrese Cedula">
                <br>
            </div>

            <div class="col-md-2">
                <label>Estado Civil</label>
                <select id="txtCivil"  style="width: 100%" class="form-control select2">
                  <option value="2613">CASADO</option>
                  <option value="2013">SOLTERO</option>
                  <option value="">VIODU/A</option>
                  <option value="">DIVORCIADO/A</option>
                </select>
                <br>
            </div> 
            <div class="col-md-2">
                <label>Etnia</label>
                <select id="txtetnias"  style="width: 100%" class="form-control select2">
                  <option value="">NOSE</option>
                  <option value="">OTRA</option>
                  <option value=""></option>
                  <option value=""></option>
                </select>
                <br>
            </div> 

            <div class="col-md-2">
                <label>Pais</label>
                <select id="txtPais"  style="width: 100%" class="form-control select2">
                  <option value="Venezuela">Venezuela</option>
                  <option value="">DUBAI</option>
                 
                </select>
                <br>
            </div> 

            <div class="col-md-2">
                <label>Discapacidad</label>
                <select id="txtDiscapacidad"  style="width: 100%" class="form-control select2">
                  <option value="2613">SIN PIE</option>
                  <option value="2013">SIN MANO</option>
                  <option value="">SIN PATA</option>
                  <option value="">SIN OREJA</option>
                </select>
                <br>
            </div> 

            <div class="col-md-2">
                <label>Condicion</label>
                <select id="txtCondicion"  style="width: 100%" class="form-control select2">
                  <option value="2613">ni idea</option>
                  <option value="2013">sera</option>
                  <option value="">creo</option>
                  <option value="">SI</option>
                </select>
                <br>
            </div> 

            <div class="col-md-2">
                <label>Lugar Nacimiento </label>
                <select id="txtNacimiento"  style="width: 100%" class="form-control select2">
                  <option value="2613">HOSPITAL</option>
                  <option value="2013">MICASA</option>
                  <option value="NATURAL"></option>
                  <option value="NATURAL"></option>
                </select>
                <br>
            </div> 

            <div class="col-sm-2">
                <label >Sexo</label>
                <select id="txtGenero" class="form-control select2" name="txtGenero">
                  <option value="Masculino">HOMBRE</option>
                  <option value="Femenino">MUJER</option> 
                </select>
                <br>
            </div><br>
            <div class="col-sm-2">
                <label >Tipo Sangre</label>
                <select id="txtSangre" class="form-control select3" name="txtSangre">
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
                <br>
            </div><br>
            <div class="col-sm-2">
                <label >Nucleo</label>
                <select id="txtNucleo" class="form-control select3" name="txtNucleo">
                  <option value="Lara">Lara</option>
                  <option value="">Otro</option>
                </select>
                <br>
            </div><br>
            <div class="col-md-2">
                <label>MATRICULA</label>
                <select id="cbm_matricula"  style="width: 100%" class="form-control select2">
                  <option value="2613">ING.SISTEMA</option>
                  <option value="2213">ING.ELECTRICA</option>
                  <option value="2013">ING.AGRONOMIA</option>
                  <option value="0913">LIC.ADMINISTRACION</option>
                  <option value="1310">LIC.ECONOMIA</option>
                  <option value="1303">TSU.ENFERMERIA</option>
                </select>
                <br>
            </div>   
            <div class="col-sm-4">
                <label >Email</label>
                <input type="email" class="form-control"  id="txtemail" placeholder="Ingrese Email">
                <br>
            </div>

            <div class="col-sm-2">
                <label >Telefono Habitacion</label>
                <input type="text" class="form-control" id="txttelefono" maxlength="10" onkeypress="return soloNumeros(event)"  placeholder="Ingrese Numero Telefonico">
                <br>
            </div>
            <div class="col-md-2">
                <label>Telefono Movil</label>
                <input type="text"class="form-control" id="txtmovil"  onkeypress="return soloNumeros(event)" placeholder="Ingrese nro movil" maxlength="10">
                <br>
            </div> 
          </div>  

            <div class="col-sm-2">
                <label>Fecha Nacimiento</label>
                <div class=" input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" style="padding: 0px 12px;background-color: #FFFFFF;font-weight:bold;" id="txtfecha"  class="form-control"  >
                </div><br>
            </div>
            
            <div class="col-sm-2">
                <label>Fecha Ingreso</label>
                <div class=" input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" style="padding: 0px 12px;background-color: #FFFFFF;font-weight:bold;" id="txtfechaIngreso"  class="form-control"  >
                </div><br>
            </div>

            <div class="col-sm-2">
                <label>Fecha Inicio Programa</label>
                <div class=" input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" style="padding: 0px 12px;background-color: #FFFFFF;font-weight:bold;" id="txtfechainicio"  class="form-control"  >
                </div><br>
            </div>
            
            
            
                   
          <div class="col-md-12 col-lg-12 col-xs-12" style="text-align:center;">
            <div class="col-md-12">
              <br><button class="btn btn-success" onclick="revisar_dni_ciudadano()"><strong> Registrar Estudiante</strong></button><br><br>
            </div>
          </div>
    </div>
  </div>
</div>
<script type="text/javascript">
</script>
<script type="text/javascript" src="_recursos/js/consola_ciudadano.js"></script>

<style type="text/css">
  .contendor_kn{
    padding: 10px;
  }
</style>
<style type="text/css">
    label{
      font-weight:bold;
    }
    .select2{
      font-weight:bold;
      text-align-last:center;
    }
    button{
    font-weight:bold;
    
    }
    select{
       font-weight:bold;
      text-align-last:center;
    }
    .select2-container--default.select2-container--disabled .select2-selection--single{
      color: rgb(25,25,51); background-color: rgb(255,255,255);solid 5px;
    }
    .modal-open .select2-container--open {
      z-index: 999999 !important; width:100% !important; 
    }
</style>
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>
<script>
  function soloNumeros(e){
      tecla = (document.all) ? e.keyCode : e.which;

      //Tecla de retroceso para borrar, siempre la permite
      if (tecla==8){
          return true;
      }
          
      // Patron de entrada, en este caso solo acepta numeros
      patron =/[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
  }
</script>
<script>
      $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
      });
</script>
<script>
    $(function () {
        $('.select2').select2();
    })
</script>