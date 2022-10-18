

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
if (!isset($_POST['buscacategoria'])){$_POST['buscacategoria'] = '';}
if (!isset($_POST['buscafechadesde'])){$_POST['buscafechadesde'] = '';}
if (!isset($_POST['buscafechahasta'])){$_POST['buscafechahasta'] = '';}

if (!isset($_POST['searchSE'])){$_POST['searchSE'] = '';}
if (!isset($_POST["orden"])){$_POST["orden"] = '6';}
if (!isset($_POST["limitReg"])){$_POST["limitReg"] = '100';} 
?>






    <form id="form2" name="form2" method="POST" action="buscador.php">
            
                <fieldset id="box" style="border-color:#0a061400;background-color: #0a061499;">
               
               
                <div id="divA">                                                      
                                                
                <h5>Fecha Desde </h5>
                <input type="date" id="buscafechadesde" name="buscafechadesde" class="form-control" value="<?php echo $_POST["buscafechadesde"]; ?>" >
                </div>
                
                <div id="divA">
                                                
                <h5>Fecha Hasta </h5>
                <input type="date" id="buscafechahasta" name="buscafechahasta" class="form-control" value="<?php echo $_POST["buscafechahasta"]; ?>" >
        
                </div>
                
                <div id="divA">
                                                            <h5>Sector </h5>
                                                            <select id="assigned-tutor-filter" id="searchSE" name="searchSE" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                    <?php if ($_POST["searchSE"] != ''){ ?>
                                                                    <option value="<?php echo $_POST["searchSE"]; ?>">
                                                                     <?php 
                                                                    if ($_POST["orden"] == ''){echo 'Todos los Sectores';}  
                                                                    if ($_POST["orden"] == '4'){echo 'Electricidad';} 
                                                                    if ($_POST["orden"] == '5'){echo 'Armado';} 
                                                                    if ($_POST["orden"] == '6'){echo 'Pintura';}
                                                                    if ($_POST["orden"] == '7'){echo 'Carpinteria Metalica';} 
                                                                    if ($_POST["orden"] == '9'){echo 'Almacen';}   
                                                                    if ($_POST["orden"] == '12'){echo 'Celdas';} 
                                                                    if ($_POST["orden"] == '14'){echo 'Calidad';} 
                                                                    if ($_POST["orden"] == '15'){echo 'Celdas Avellaneda';}
                                                                    if ($_POST["orden"] == '17'){echo 'Barras';}  

                                                                     ?>   
                                                                
                                                                    </option>
                                                                    <?php } ?>
                                                                        <option value="">Todos los Sectores</option>
                                                                        <option value="4">Electricidad</option>
                                                                        <option value="5">Armado</option>
                                                                        <option value="6">Pintura</option>
                                                                        <option value="7">Carpinteria Metalica</option>
                                                                        <option value="9">Almacen</option>
                                                                        
                                                                        <option value="12">Celdas</option>
                                                                        <option value="14">Calidad</option>
                                                                        <option value="15">Celdas Avellaneda</option>
                                                                        
                                                                        <option value="17">Barras</option>
                                                                        
                                
                                                            </select>
                                                            </div><div id="divA">
                                                            <h5>Selecciona el Orden </h5>
                                                            <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                    <?php if ($_POST["orden"] != ''){ ?>
                                                                    <option value="<?php echo $_POST["orden"]; ?>">
                                                                    <?php 
                                                                    if ($_POST["orden"] == '1'){echo 'Ordenar por Sector';} 
                                                                    if ($_POST["orden"] == '2'){echo 'Ordenar por Categoria';} 
                                                                    if ($_POST["orden"] == '3'){echo 'Ordenar por Pedido Fabricacion';}
                                                                    if ($_POST["orden"] == '4'){echo 'Ordenar por Operario';} 
                                                                    if ($_POST["orden"] == '5'){echo 'Ordenar por Tarea';}   
                                                                    if ($_POST["orden"] == '6'){echo 'Ordenar por fecha mas reciente';} 
                                                                    if ($_POST["orden"] == '7'){echo 'Ordenar por fecha mas antigua';} 
                                                                    ?>
                                                                    </option>
                                                                    <?php } ?>
                                                                    <option value="7">Ordenar por Fecha Mas Antigua</option>
                                                                    <option value="6">Ordenar por Fecha Mas Reciente</option>
                                                                    <option value="1">Ordenar por Sector</option>
                                                                    <option value="2">Ordenar por Categoria</option>      
                                                                    <option value="3">Ordenar por Pedido Fabricacion</option>
                                                                    <option value="4">Ordenar por Operario</option>
                                                                    <option value="5">Ordenar por Tarea</option>
                                                                    
                                                            </select>

                                                            </div>
                                                            <div id="divA">
                                                            <h5>Limite Registros</h5>
                                                            <select id="assigned-tutor-filter" id="limitReg" name="limitReg" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                            <?php if ($_POST["limitReg"] != ''){ ?>
                                                                    <option value="<?php echo $_POST["limitReg"]; ?>">
                                                                    <?php 
                                                                    if ($_POST["limitReg"] == ''){echo 'Todos los Registros';} 
                                                                    if ($_POST["limitReg"] == '100'){echo '100';} 
                                                                    if ($_POST["limitReg"] == '500'){echo '500';}
                                                                    if ($_POST["limitReg"] == '1000'){echo '1000';} 
                                                                    if ($_POST["limitReg"] == '3000'){echo '3000';} 
                                                                     
                                                                     
                                                                    ?>
                                                                    </option>
                                                                    <?php } ?>
                                                                    
                                                                    <option value="">Todos los Registros</option> 
                                                                    <option value="100">100</option>    
                                                                    <option value="500">500</option>
                                                                    <option value="1000">1000</option>
                                                                    <option value="3000">3000</option>
                                                                    
                                                                    
                                                            </select>
                                                            
                                                            </div>
                                                            <input type="submit" id="button4" value="BUSCAR"><br><br><br>
                                                        </fieldset>
                                                        
                    <div class="table-responsive">
                                                        <div class="col-12 row m-0 p-0">
                
                <div class="col-12">
                    </div>
                    <div class="col-1">
                            
                    </div>
            </div>
                                                                    </div>
                                                                   <div class="card col-12 mt-2" style="background-color: #f0f8ffad;">
            <?php 
            /*FILTRO de busqueda////////////////////////////////////////////*/
            
*
            
          
            if ($_POST["buscar"] == '' AND $_POST['searchSE'] == '' AND $_POST['buscacategoria'] == '' AND $_POST['buscafechadesde'] == '' AND $_POST['buscafechahasta'] == '' AND $_POST['searchPF'] == ''){ 
                    $query ="SELECT s.nom_sector, r.operario, r.tarea,
                    r.cliente, r.pFab_full, r.horaInicio, r.horaFin, r.tiempoTarea,
                    descanso, estado, descripTarea, r.sector
                                                                    FROM registros r
                                                                    LEFT JOIN sector s
                                                                    ON r.sector = s.idSector ";
                    $queryCalHS = "SELECT sum(tiempoTarea) sumaTotal from 
                    registros ";
                    
            }else{


                    $query ="SELECT r.idRegistro, s.nom_sector, r.operario, r.tarea,
                    r.cliente, r.pFab_full, r.horaInicio, r.horaFin, r.tiempoTarea,
                     descanso, estado, descripTarea, r.sector
                                                                    FROM registros r
                                                                    LEFT JOIN sector s
                                                                    ON r.sector = s.idSector ";
                    $queryCalHS = "SELECT sum(tiempoTarea) sumaTotal from 
                    registros ";
                    

            if ($_POST["buscar"] != '' ){ 
                    $query .= "WHERE (operario LIKE LOWER('%".$aKeyword[0]."%') OR tarea LIKE LOWER('%".$aKeyword[0]."%') OR cliente LIKE LOWER('%".$aKeyword[0]."%'))";
                    $queryCalHS .= "WHERE (operario LIKE LOWER('%".$aKeyword[0]."%') OR tarea LIKE LOWER('%".$aKeyword[0]."%') OR cliente LIKE LOWER('%".$aKeyword[0]."%'))";
            
            for($i = 1; $i < count($aKeyword); $i++) {
              if(!empty($aKeyword[$i])) {
                  $query .= " OR nombre LIKE '%" . $aKeyword[$i] . "%' OR tarea LIKE '%" . $aKeyword[$i] . "%' OR cliente LIKE '%" . $aKeyword[$i] . "%'";
                  $queryCalHS .= " OR nombre LIKE '%" . $aKeyword[$i] . "%' OR tarea LIKE '%" . $aKeyword[$i] . "%' OR cliente LIKE '%" . $aKeyword[$i] . "%'";
              }
            }

            }

            if ($_POST["buscacategoria"] != '' ){
                    $query .= " AND categoria = '".$_POST['buscacategoria']."' ";
                    $queryCalHS .= " AND categoria = '".$_POST['buscacategoria']."' ";
                    
            }

            if ($_POST["searchSE"] != '' ){
                $query .= " AND sector = '".$_POST['searchSE']."' ";
                $queryCalHS .= " AND sector = '".$_POST['searchSE']."' ";
                
        }

            if ($_POST["buscafechadesde"] != '' ){
                    $query .= " AND fecha BETWEEN '".$_POST["buscafechadesde"]."' AND '".$_POST["buscafechahasta"]."' ";
                    $queryCalHS .= " AND fecha BETWEEN '".$_POST["buscafechadesde"]."' AND '".$_POST["buscafechahasta"]."' ";
            }

            if ( $_POST['searchPF'] != '' ){
                    $query .= " AND pFab_full LIKE ('%".$_POST['searchPF']."%') ";
                    $queryCalHS .= " AND pFab_full LIKE ('%".$_POST['searchPF']."%') ";
            }
            
          
            /*FILTRO ORDENAMIENTO*/
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



        }  # echo $query;
           

            $sqlFiltro = $conex->query($query); 
            $numeroSql = mysqli_num_rows($sqlFiltro);
        ?>

            
                    
            <h5><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados</h5>
    </form>
    <div class="table-responsive" style="margin-right: 0.9%">
            <table class="table">
                        <thead>
                            <tr style="background-color:#6a7d8d;">
                                    
                                    <th style=" text-align: center; width: 100px;"> N° Registro 
                                    
                                </th>  
                                    <th style=" text-align: center;"> Cliente </th>
                                    <th style=" text-align: center;"> Ped.Fab./Ord.Trab. </th>
                                    <th style=" text-align: center;"> Sector </th>
                                    <th style=" text-align: center;"> Tarea </th>
                                    <th style=" text-align: center; width: 120px;"> Desc. </th>
                                    <th style=" text-align: center;"> Operario </th>
                                    <th style=" text-align: center;"> Hora Inicio </th>
                                    <th style=" text-align: center;"> Hora Fin </th>
                                    <th style=" text-align: center; width:140px;"> Tiempo Tarea (h) </th>
                                    <th style=" text-align: center; width: 90px;"> Estado </th>
                            </tr>
                         </thead>
                         <tbody><tr>
                                 
                        </tr></tbody></table></div>
    <div class="table-responsive table-fixed">
            <table id="datatables" class="table" >
                    <thead>
                            <tr style="background-color:#6a7d8d;">
                                 <th style="width: 100px;"></th><th></th><th></th><th></th><th></th><th style="width: 120px;"></th><th></th><th></th><th></th><th style="width:140px;"></th><th style="width:90px;"></th>      
                            </tr>
                    </thead>
                    <tbody>
                    <?php While($rowSql = $sqlFiltro->fetch_assoc()) { #color para descanso #b95f5f  ?>
                        
                            <tr>
                            <td style="text-align: center; width: 100px;"><?php echo $rowSql["idRegistro"]; 
                            
                            ?>    
                            </td>
                            <td style="text-align: center;"><?php echo $rowSql["cliente"]; ?></td>
                            <td style="text-align: center;"><?php echo $rowSql["pFab_full"]; ?></td>
                            <td style="text-align: center;"><?php echo $rowSql["nom_sector"]; ?></td>
                            <td style="text-align: center;"><?php echo $rowSql["tarea"]; ?></td>
                            <td id="componeFoto3" class="primera_col" style="text-align: center;width: 120px;"><?php echo $rowSql["descripTarea"]; ?></td>
                            <td style=" text-align: center;"><?php echo $rowSql["operario"]; ?></td>
                            <td style=" text-align: center;"><?php echo $rowSql["horaInicio"]; ?></td>
                            <td style=" text-align: center;"><?php echo $rowSql["horaFin"]; ?></td>
                            <td style=" text-align: center;width:140px;"><?php echo (round($rowSql['tiempoTarea']/3600,2)); ?></td>
                            <td style="text-align: center; width: 90px !important; ">
                         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <?php
                
                
                
                
                
                
                
                
                
                
                
                
                } ?>
                    </tbody>
            </table>
    </div>



<style>
         #componeFoto3{
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                        }

        #componeFoto3:hover{
                        font-size: xx-small;       
                        background-color: #96a3ad;  
                        transform: scale(1.5);
                        transition: transform .2s;
                        white-space:break-spaces;
        }

        

</style>
















                    </div>

                </div>
            </div>

        </div>



      </div>
</div>
<!-- END buscador basico -->

