<?php
//include("connection_db.php");


function result_inv()
{
     require("connection_db.php");
     // Obtener el valor de búsqueda desde el formulario
     $seach_in=$_POST['SEACH']; // esta es la barra de busqueda 
//optenemos la respuesta de l dropdawn
     $option=$_POST['option'];

     // $sql = "SELECT * FROM $option WHERE `MODULO` = $seach_in";
     $sql = "SELECT * FROM $option WHERE `MODULO` = $seach_in";
     $resultado = $conn->query($sql);


     if (!strcmp("absen3_9", $option)) {
          // consulta para la busqueda 
          // $sql = "SELECT * FROM `absen3_9` WHERE `MODULO` = $seach_in";

          if (!$resultado) {
               die("Error en la consulta: " . $conn->error);

          } else {
               if ($resultado->num_rows > 0) {

                    // bucle para imprimir los resultados de las absen 3.9
                    while ($row = $resultado->fetch_assoc()) {

                         echo
                              '<table class="tb-result">
                              <tr>
                              <!--  <th>ID</th>-->     
                                   <th>MODULO</th>
                                   <th>ENTRADA</th>
                                   <th>SALIDA</th>
                              </tr>
                                   
                              <tr> 
                              <!-- <td>' . $row["ID"] . '</td> -->
                                   <td>' . $row["MODULO"] . '</td>
                                   <td>' . $row["ENTRADA"] . '</td> 
                                   <td>' . $row["SALIDA"] . '</td>
                              </tr>
                              </table>';
                    }

               } else {
                    echo '<div class="no-result">NO RESULTS</div>';
               }

          }
     }
//************************************************************************************ 
     // segundo if
     if (!strcmp("absen2_9", $option)) {
          // consulta para las absen 2.9
          $sql = "SELECT * FROM $option WHERE`MODULO` = $seach_in";
          // $resultado = $conn->query($sql);


          if (!$resultado) {
               # code...
               die("error de la consulta" . $conn->error);
          } else {

               if ($resultado->num_rows > 0) {
                    # code...
                    while ($row = $resultado->fetch_assoc()) {
                         # code...
                         //impriimmos todo
                         echo
                              '<table class="tb-result">
                              <tr>
                                   <th>ID</th>
                                   <th>MODULO</th>
                                   <th>ENTRADA</th>
                                   <th>SALIDA</th>
                              </tr>
                              <tr> 
                                   <td>' . $row["ID"] . '</td>
                                   <td>' . $row["MODULO"] . '</td>
                                   <td>' . $row["ENTRADA"] . '</td> 
                                   <td>' . $row["SALIDA"] . '</td>
                              </tr>

                         </table>';
                    }

               } else {
                    echo '<div class="no-result">NO RESULTS</div>';
               }
          }

     } // fin if absen2.9
 

     // ***************************************************************



     $conn->close();

} // fin funcion 









