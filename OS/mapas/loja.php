<?php
include_once('../persistence/controller.php');
require_once('../template/main_template.php');


//buscando a cidade
  $loja  = $_GET['loja']; //dia culto
  //$cidade = $_GET['cidade']; // cidade
  
  echo '<script>
    
    var loja = "<?php echo trim($loja);?>"
  </script>';

 try
{
   // Code that may throw an Exception or Error.
}
catch (Throwable $t)
{
   // Executed only in PHP 7, will not match in PHP 5
}
catch (Exception $e)
{
   // Executed only in PHP 5, will not be reached in PHP 7
}

?>
  
  <title>JMFSoftware Geolocalização - Google Maps</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
    
  <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

   
    <p class="titulo"><?php echo "Loja ". $apelido;?></p>
    <div class="rota">
        <div class="conteudo">
            <!--rota waze-->

         
  <?php foreach ($rota_loja as $rota) { ?>
      <a href="https://waze.com/ul?q=search_terms
             <?php echo trim($rota['endereco'].',');
                   echo trim($rota['bairro'].'-');
                   echo trim($rota['cidade'].'-');
                   echo trim($rota['estado']);?>
             "target="_blank">
              <img class="img" src="../image/icons8-waze-96.png">
          </a> 
              
       </div>

       <div class="conteudo">
          <!--rota google-->

          <a href="https://www.google.com.br/maps/place/
             <?php echo $end = trim($rota['endereco'].',');
                   echo $bai = trim($rota['bairro'].'-');
                   echo $cid = trim($rota['cidade'].'-');
                   echo $est = trim($rota['estado']);?>
             "target="_blank">
             <img class="img" src="../image/icons8-google-maps-48.png">
          </a>

        <?php } ?> 
      </div>
    </div>
 <p class="texto"><?php echo "Loja ".$apelido = $rota['apelido'].' - ';echo $end; echo $bai;echo $cid;echo $est;?></p>
 
<script src="../js/app.js"></script>
<script src="../js/busca.js"></script>
<div id="conteiner"></div>

<style>
  
   @media screen and (max-width: 1200px){
        .img{
          display: inline-block;
          direction: column;
           width: 100px;
           background-color: none;
           text-align: center;

        }
        .rota{
          background-color: white;
        }
        .texto{
          text-align: center;
          font-size: 20px;
          padding: 10%;
          margin: 10% 0;
        }
        .titulo{
          padding: 10%;
          margin: 10% 0;
          text-align: center;
          font-size: 50px;
        }
        .conteudo{
           display: inline-block;
          direction: column;
          padding: 10%;
        }
      }
</style>