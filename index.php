<?php
include("connection_db.php");
include("seach.php");
// include("inventario.php");
?>
<!DOCTYPE html>
<html lang="en">
<!--  -->

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>27TSPANAMÁ </title>
     <link rel="shortcut icon" href="IMG/logo.ico" type="image/x-icon">
     <link rel="stylesheet" href="st.css">
</head>

<body>
     <header>
          <!--  -->
          <img src="IMG/27ts_header.png" alt="Imgen">
          <!-- <td>' . $row["ID"] . '</td> -->


          <form action="" method="post">

               <div class="INV">

                    <select name="option" id="option" required>
                         <option value="">SELECT</option>
                         <!-- Primer Grupo -->
                         <optgroup label="PANTALLAS LED">
                              <option value="absen3_9">ABSEN 3.9</option>
                              <option value="absen2_9">ABSEN 2.9</option>
                         </optgroup>

                         <!-- Seguando Grupo -->
                         <optgroup label="AUDIO">
                              <option value="SONIDO">SONIDO</option>
                         </optgroup>
                         <optgroup label="LUCES">
                              <option value="LAZER">LAZER</option>
                              <option value="BEAN">BEAN</option>
                              <option value=""></option>
                         </optgroup>

                         <optgroup label="ESTRUCTURA">
                              <option value="truss">TRUSS</option>
                         </optgroup>

                    </select>

                    <!-- <img id="logo_main" src="IMG/27ts.jpg" alt="">90 -->
                    <input id="SEARCH" type="text" placeholder="BUSCAR EQUIPO" name="SEACH" required
                         onkeydown="keyEnter(event)">

                    <input id="btn_seach" class="btn-seach" type="submit" value="ACEPTAR">
                    <!-- boton para mostrar en inventario -->
                    <input id="btn_inv" class="btn-inv" value="MOSTRA INVENTARIO" type="button" name="btn-inv">

                    <!-- fin div -->
               </div>

               </div>
          </form>

     </header>


     <div id="show_inv" class="show_inv">
          <?php result_inv(); ?>
          <!-- <div class="no-result"></div> -->

          <!-- <div class="no-result">
               <?php //mostrarInventario()      ?>
               <div class="">
                    <h1>NO RESULTS</h1>
                    <input id="bt_noResult" class="btn" value="ACEPTAR" type="button"></input>
               </div>
          </div> -->
     </div>


     <div class="alert_db"></div>
     <script src="script.js"></script>
     <!-- SCRIPT PARA jquery Y ASI ACTUALIZAR LA BASE DE DATOS EN LA MISMA PAGUINA   -->
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
<!--  -->

</html>