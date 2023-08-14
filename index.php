<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizador Enfermeria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <form class="container" method=" post">
        <div class="form-image">
            <img src="img/formfoto.svg">
        </div>

        <div class="form">
            <h2>Organizador</h2>
            <div class="input-wrapper">
              <div class="input-box">
                    <label for="name">Nombre</label>
                    <input  type="text" name="name" placeholder="Nombre del paciente">
               </div> 



              <div class="input-box">
                 <label for="estado">Estado</label>
                 <input type="text" name="estado" placeholder="Estado">
              </div>                 


              <div class="input-box">
                 <label for="direccion">Direccion</label>
                 <input type="text" name="direccion" placeholder="Direccion">
              </div>  
 


              <div class="input-box">
                 <label for="phone">Telefono</label>
                 <input type="tel" name="phone" placeholder="Telefono">
              </div>  


              <div class="input-box">
                 <label for="ved">Ved</label>
                 <input type="text" name="ved" placeholder="Ved">
              </div>    


               <div class="input-box">
                  <label for="horas">Horas del Cuidador</label>
                  <input type="text" name="horas" placeholder="Horas del Cuidador">
              </div>   


                <div class="input-box">
                    <label for="enfermero">Enfermero</label>
                    <input type="text" name="enfermero" placeholder="Enfermero">
                </div>



                <div class="input-box">
                    <label for="cuidadoras">Cuidadoras</label>
                    <input type="text" name="cuidadoras" placeholder="Cuidadoras">
                </div>


              <div class="input-box"> 
                    <label for="insumos">Insumos</label>
                    <input type="text" name="insumos" placeholder="Insumos">
               </div>  


                <div class="input-box"> 
                    <label for="observacion">Observacion</label>
                    <input type="text" name="observacion" placeholder="Observacion">
                </div>

            </div>
            <div class="guardar-button" >
                <button type="btn" name="register"> <a href="#"> Guardar </a> </button>
            </div>

        </div>
        
    </form>
    
</body>
</html>