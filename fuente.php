<?php
echo '
<center>
<p>Fuente: <a href="https://www.vatican.va/archive/ESL0506/_INDEX.HTM" target="_blank" style="text-decoration:none">www.vatican.va/archive/bible</a></p>
<p>- 2022 -</p>
</center>
<!---Boton BN--->
<style> .oscuro{ background-color: #1f1f1f; color: #f1eded; } </style>
<script type="text/javascript"> 
      function cambiarModo() { 
        var cuerpoweb = document.body; 
        cuerpoweb.classList.toggle("oscuro"); 
      } 
    </script>
<style> .claro { color: white } </style>
<script type="text/javascript"> 
      function cambiarColor() { 
        var cuerpoweb = document.body; 
        cuerpoweb.classList.toggle("claro"); 
      } 
    </script>
<!---Botones fixed--->
<!---Boton Cafecito---
<h1><a href="https://cafecito.app/mebya" Target="_blank" style="display:scroll; position:fixed; bottom:10px; left:10px;"><img src="https://mebya.net/cafecito.png" width="50"></a></h1>
---Boton Claro/Oscuro---
<img onclick="cambiarColor()"  style="display:scroll; position:fixed; bottom:15px; right:10px; border:5px outset silver;" src="https://mebya.net/jc/biblia/byn.png" width="40">
-->
<!---Boton Claro/Oscuro texto--->
<button onclick="cambiarModo()"  style="display:scroll; position:fixed; bottom:10px; right:10px;"><h3>B/N</button>
';
?>