<?php
echo '
<!-----------------------------------MEBYA.NET-------------------------------------->
<style>
body {
  background-color: #00AAE4;
}
.btn-menu {
  position:fixed;
  z-index:1000;
  top:0;
  left:0;
  width:100%;
  box-shadow:0px 4px 3px rgba(0,0,0,.5);

  background-color: blue;
  border: none;
  color: white;
  padding: 7px 0px 0px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 28px;
}
  .btn-menu:hover{
    color: yellow;
    background-color: blue;
  }
</style>
<!--
<center>
<h2><a class="btn-menu" href="https://mebya.net/" style="text-decoration:none"><img src="../../../Mebya_logo.png" width="170"></a></h2>
</center>
<br><br>-->
<!-----------------------------------End MEBYA.NET-------------------------------------->
<center>
<h1>BIBLIA<BR>El libro del pueblo de Dios</h1>
<style type="text/css">
.btnPower {
    background-color: orange;
    color: white;
    border: none;
    color: black;
    padding: 7px 28px;
    text-align: center;
    border-radius: 10px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
<button class="btnPower"><a href="../../" style="text-decoration:none; color: white;">Índice</a></button>
<br>
<!-----------------------------------MODE: Oscuro / Claro-------------------------------------->
<style> .oscuro{ background-color: #1f1f1f; color: #f1eded; } </style>
<script type="text/javascript"> 
      function cambiarModo() { 
        var cuerpoweb = document.body; 
        cuerpoweb.classList.toggle("oscuro"); 
      } 
    </script>
<!--<button type="button" class="btn btn-dark" onclick="cambiarModo()"><FONT COLOR="">Oscuro / Claro</FONT></button>-->
<!-----------------------------------End MODE: Oscuro / Claro-------------------------------------->
</center>
<style>
p, h1, h2, h3 { margin: 10px; font-family: Verdana,Geneva,sans-serif; } 
a:link, a:active, a:hover, a:visited { color: yellow; //#00AAE4}
</style>
';
?>