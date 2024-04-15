<?php
include("connection_db.php");

# code...
$sql = "SELECT *FROM absen3_9 ";
$result = $conn->query($sql);

if (!$result) {
     die("Error en la consulta: " . $conn->error);

} else {
     if ($result->num_rows > 0) {

          // bucle para imprimir los resultados de las absen 3.9
          while ($row = $result->fetch_assoc()) {

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



// detectamos el boton para  mostarar el inventario 
function mostrarInventario()
{
     include("connection_db.php");

     if (!isset($_POST['btn-inv'])) {
          # code...
          $sql = "SELECT *FROM absen3_9 ";
          $result = $conn->query($sql);

          if (!$result) {
               die("Error en la consulta: " . $conn->error);

          } else {
               if ($result->num_rows > 0) {

                    // bucle para imprimir los resultados de las absen 3.9
                    while ($row = $result->fetch_assoc()) {

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
                    // echo '<div class="no-result"> NO RESULTS</div>';
                    ?>
                    <div class="no-result">
                         <h1>NO RESULTS</h1>
                         <input id="bt_noResult" class="btn" value="ACEPTAR" type="button"></input>
                    </div>
                    <?php
               }


          }







     } //
}

