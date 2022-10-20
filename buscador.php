

<style>
  th, td{
    text-align: left;
  }
  .pg{
    line-height: 2px;
  }
</style>








<!-- buscador basico -->

                

<?php 

$conex = mysqli_connect("localhost","root","1234","basegenero");

if (!isset($_POST['genero'])){$_POST['genero'] = '';}
if (!isset($_POST['buscafechadesde'])){$_POST['buscafechadesde'] = '';}
if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}
if (!isset($_POST['llamante_region'])){$_POST['llamante_region'] = '';}
if (!isset($_POST['lugar'])){$_POST['lugar'] = '';}
if (!isset($_POST["nacionalidad"])){$_POST["nacionalidad"] = '';}
if (!isset($_POST["llamante_vinculo"])){$_POST["llamante_vinculo"] = '';} 

?>




<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">

    <h2>REGISTRO DE LES PIBIS</h2><br><br>

    <form id="form2" name="form2" method="POST">
            
                
                <div style="display: flex;">
               
                <div id="divA">                                                      
                                                
                <h5>Fecha Desde </h5>
                <input type="date" id="buscafechadesde" name="buscafechadesde" class="form-control" value="<?php echo $_POST["buscafechadesde"]; ?>" >
                </div>
                
                <div id="divA">
                                                
                <h5>Fecha Hasta </h5>
                <input type="date" id="buscafechahasta" name="buscafechahasta" class="form-control" value="<?php echo $_POST["buscafechahasta"]; ?>" >
        
                </div>
               
                </div>

                <div style="display: flex;">
                <div id="divA">

               <?php
               $sql1="SELECT idGenero, descripGen from genero";
               $result1=mysqli_query($conex,$sql1);
               ?>         

                       
<section style="text-align: center;">
        <select id="controlBuscador" name="genero" lang="es">
        <option value="">ELEGIR GENERO</option>
                <?php while ($ver1=mysqli_fetch_row($result1)) {?>

                <option value="<?php echo $ver1[0] ?>">
                        <?php echo $ver1[1] ?>
                </option>

                <?php  }?>
        </select>
</section>	           
</div>
                                                            

        
        <div id="divA">
        
        <?php
               $sql3="SELECT idVinculo, descripVinculo from llamante_vinculo";

               $result3=mysqli_query($conex,$sql3);
               ?>         

                
                       
<section style="text-align: center;">
        <select id="controlBuscador3" name="vinculo" lang="es">
        <option value="">ELEGIR VINCULO</option>
                <?php while ($ver3=mysqli_fetch_row($result3)) {?>

                <option value="<?php echo $ver3[0] ?>">
                        <?php echo $ver3[1] ?>
                </option>

                <?php  }?>
        </select>
</section>	                  



        </div>

        <div id="divA">
        
        <?php
               $sql4="SELECT idLugar, decripLugar from lugar";
               
               $result4=mysqli_query($conex,$sql4);
               ?>         

               
                       
<section style="text-align: center;">
        <select id="controlBuscador4" name="lugar" lang="es">
        <option value="">ELEGIR LUGAR</option>
                <?php while ($ver4=mysqli_fetch_row($result4)) {?>

                <option value="<?php echo $ver4[0] ?>">
                        <?php echo $ver4[1] ?>
                </option>

                <?php  }?>
        </select>
</section>	                  

</div>

<div id="divA">
        
        <?php
               $sql5="SELECT idNacion, descrip_nacionalidad from nacionalidad";
               
               $result5=mysqli_query($conex,$sql5);
               ?>         

                       
<section style="text-align: center;">
        <select id="controlBuscador5" name="nacionalidad" lang="es">
        <option value="">ELEGIR NACIONALIDAD</option>
                <?php while ($ver5=mysqli_fetch_row($result5)) {?>

                <option value="<?php echo $ver5[0] ?>">
                        <?php echo $ver5[1] ?>
                </option>

                <?php  }?>
        </select>
</section>	                  

</div>

<div id="divA">
        
        <?php
               $sql6="SELECT idRegion, desc_region from llamante_region";
               
               $result6=mysqli_query($conex,$sql6);
               ?>         

                        
<section style="text-align: center;">
        <select id="controlBuscador6" name="llamante_region" lang="es">
        <option value="">ELEGIR REGION</option>
                <?php while ($ver6=mysqli_fetch_row($result6)) {?>

                <option value="<?php echo $ver6[0] ?>">
                        <?php echo $ver6[1] ?>
                </option>

                <?php  }?>
        </select>
</section>	                  

</div>





        

   </div>
                                                        
   <input type="submit" id="componeFoto3" class="btn btn-success" name="actualizar" value="BUSCAR">
   </form>
    </div>
    </section>
    <?php 
            /*FILTRO de busqueda////////////////////////////////////////////*/
            
            
            
          
            if ($_POST["genero"] == '' 
             AND $_POST['lugar'] == '' 
             AND $_POST['nacionalidad'] == ''
             AND $_POST['vinculo'] == ''
             AND $_POST['llamante_region'] == ''){ 
                   
                   $query ="SELECT llamadoHora,desc_region,llamante_edad,victima_edad, victima_convive_agresor, 
                    DATE_FORMAT(llamado_fecha,'%d-%m-%Y') as fecha, descripGen,
                    descrip_nacionalidad, decripLugar,llamante_vinculo,
                    descripVinculo FROM datos
                    LEFT JOIN llamante_region ON idRegion = llamado_region
                    LEFT JOIN nacionalidad on idNacion = victima_nacionalidad
                    LEFT JOIN genero ON idGenero = victima_genero
                    LEFT JOIN lugar ON idLugar = hecho_lugar
                    LEFT JOIN llamante_vinculo ON idVinculo = llamante_vinculo 
                    WHERE codigo >= 0 ";
                    

                    
            }else{


                    $query ="SELECT llamadoHora,desc_region,llamante_edad,victima_edad, victima_convive_agresor, 
                    DATE_FORMAT(llamado_fecha,'%d-%m-%Y') as fecha, descripGen,
                    descrip_nacionalidad, decripLugar, llamante_vinculo,
                    descripVinculo FROM datos
                    LEFT JOIN llamante_region ON idRegion = llamado_region
                    LEFT JOIN nacionalidad on idNacion = victima_nacionalidad
                    LEFT JOIN genero ON idGenero = victima_genero
                    LEFT JOIN lugar ON idLugar = hecho_lugar
                    LEFT JOIN llamante_vinculo ON idVinculo = llamante_vinculo 
                    WHERE codigo >= 0  ";

                    

            if ($_POST["genero"] != '' ){ 
                    
                    $query .= " AND victima_genero = '".$_POST['genero']."' ";
                    

            }

            if ($_POST["lugar"] != '' ){
                    $query .= " AND hecho_lugar = '".$_POST['lugar']."' ";
                    
                    
            }

            if ($_POST["nacionalidad"] != '' ){
                $query .= " AND victima_nacionalidad = '".$_POST['nacionalidad']."' ";
                
                
        }

            if ($_POST["buscafechadesde"] != '' ){
                    $query .= " AND fecha BETWEEN '".$_POST["buscafechadesde"]."' AND '".$_POST["buscafechahasta"]."' ";
                    
            }

            if ($_POST["llamante_region"] != '' ){
                $query .= " AND llamado_region = '".$_POST['llamante_region']."' ";
                
                
        }

        if ($_POST["vinculo"] != '' ){
                $query .= " AND llamante_vinculo = '".$_POST['vinculo']."' ";
                
                
        }
            
          
            /*FILTRO ORDENAMIENTO
            if ($_POST["orden"] == '1' ){
                $query .= " ORDER BY sector DESC ";
        }

        if ($_POST["orden"] == '2' ){
                $query .= " ORDER BY categoria DESC ";
        }

        if ($_POST["orden"] == '3' ){
                $query .= " ORDER BY pFab_full DESC ";
        }

        if ($_POST["orden"] == '4' ){
                $query .= " ORDER BY operario DESC ";
        }

        if ($_POST["orden"] == '5' ){
                $query .= " ORDER BY tarea DESC ";
        }

        if ($_POST["orden"] == '6' ){
                $query .= " ORDER BY idRegistro DESC ";
        }

        if ($_POST["orden"] == '7' ){
                $query .= " ORDER BY fecha ASC ";
        }

        
        
        if ($_POST["limitReg"] == '100'){
                $query.= " LIMIT 100";
        }

        if ($_POST["limitReg"] == '500'){
                $query.= " LIMIT 500";
        }

        if ($_POST["limitReg"] == '1000'){
                $query.= " LIMIT 1000";
        }

        if ($_POST["limitReg"] == '3000'){
                $query.= " LIMIT 3000";
        }

*/

        }  
           
          
            $sqlFiltro = $conex->query($query); 
            $numeroSql = mysqli_num_rows($sqlFiltro);
        ?>

            
                    
            <h5><i class="mdi mdi-file-document"></i> Se encontraron <?php echo ' '.$numeroSql; ?> resultados</h5>
   
    <div class="table-responsive table-fixed">
            <table class="table">
                        <thead>
                            <tr style="background-color:#6a7d8d;">
                                    
                                  
                                <th>FECHA</th>
                                <th>HORA</th>
                                <th>LLAMADO REGION</th>
                                <th>LLAMANTE EDAD</th> 
                                <th>LLAMANTE VINCULO</th>
                                <th>VICTIMA GENERO</th>
                                <th>VICTIMA EDAD</th>
                                <th>VICTIMA NACIONALIDAD</th>
                                <th>LUGAR</th>

                            </tr>
                         </thead>
                         <tbody><tr>
                                 
                        </tr></tbody>
                        
                    <?php While($rowSql = $sqlFiltro->fetch_assoc()) { #color para descanso #b95f5f  ?>
                        
                            <tr>

                                <td style="font-size:85%;"><?php  echo $rowSql['fecha']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['llamadoHora']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['desc_region']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['llamante_edad']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['descripVinculo']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['descripGen']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['victima_edad']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['descrip_nacionalidad']; ?></h5></td>
                                <td style="font-size:85%;"><?php echo $rowSql['decripLugar']; ?></h5></td>

                <?php
                
   
                } ?>
                    </tbody>
            </table>
    </div>



<style>
        
        #componeFoto3:hover{
                            
                        
                        transform: scale(1.2);
                        transition: transform .2s;
                        white-space:break-spaces;
        }

        

</style>
<script type="text/javascript">

$(document).ready(function(){
        $('#controlBuscador').select2();
});

$(document).ready(function(){
        $('#controlBuscador3').select2();
});

$(document).ready(function(){
        $('#controlBuscador4').select2();
});

$(document).ready(function(){
        $('#controlBuscador5').select2();
});

$(document).ready(function(){
        $('#controlBuscador6').select2();
});
</script>
