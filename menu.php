<?php
echo '
<style>
.select {
    background-color: white;
    border: none;
    color: black;
    padding: 7px 28px;
    text-align: center;
    border-radius: 10px;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
}
</style>
<center>
<!--<hr style="width:50%; margin: auto;" />-->
<form>
<BR>
<select class="select" name="select" style="width:90%;" onchange="location = this.value;">
  <option value="">EL ANTIGUO TESTAMENTO</option>
  <option value="../genesis">GENESIS</a></option>
  <option value="../exodo">EXODO</option>
  <option value="../levitico">LEVITICO</option>
  <option value="../deuteronomio">DEUTERONOMIO</option>
  <option value="../numeros">NUMEROS</option>
  <option value="../josue">JOSUE</option>
  <option value="../jueces">JUECES</option>
  <option value="../samuel">PRIMER LIBRO DE SAMUEL</option>
  <option value="../samuel2">SEGUNDO LIBRO DE SAMUEL</option>
  <option value="../reyes">PRIMER LIBRO DE LOS REYES</option>
  <option value="../reyes2">SEGUNDO LIBRO DE LOS REYES</option>
  <option value="../isaias">ISAIAS</option>
  <option value="../jeremias">JEREMIAS</option>
  <option value="../ezequiel">EZEQUIEL</option>
  <option value="../oseas">OSEAS</option>
  <option value="../joel">JOEL</option>
  <option value="../amos">AMOS</option>
  <option value="../abdias">ABDIAS</option>
  <option value="../jonas">JONAS</option>
  <option value="../miqueas">MIQUEAS</option>
  <option value="../nahum">NAHUM</option>
  <option value="../habacuc">HABACUC</option>
  <option value="../sofonias">SOFONIAS</option>
  <option value="../ageo">AGEO</option>
  <option value="../zacarias">ZACARIAS</option>
  <option value="../malaquias">MALAQUIAS</option>
  <option value="../salmos">SALMOS</option>
  <option value="../job">JOB</option>
  <option value="../proverbios">PROVERBIOS</option>
  <option value="../rut">RUT</option>
  <option value="../cantar">CANTAR DE LOS CANTARES</option>
  <option value="../eclesiastes">ECLESIASTES</option>
  <option value="../lamentaciones">LAMENTACIONES</option>
  <option value="../ester">ESTER</option>
  <option value="../daniel">DANIEL</option>
  <option value="../cronicas">PRIMER LIBRO DE LAS CRONICAS</option>
  <option value="../cronicas2">SEGUNDO LIBRO DE LAS CRONICAS</option>
  <option value="../esdras">ESDRAS</option>
  <option value="../nehemias">NEHEMIAS</option>
  <option value="../ester2">ESTER SUPLEMENTOS GRIEGOS</option>
  <option value="../judit">JUDIT</option>
  <option value="../tobias">TOBIAS</option>
  <option value="../macabeos">PRIMER LIBRO DE LOS MACABEOS</option>
  <option value="../macabeos2">SEGUNDO LIBRO DE LOS MACABEOS</option>
  <option value="../sabiduria">SABIDURIA</option>
  <option value="../eclesiastico">ECLESIASTICO</option>
  <option value="../baruc">BARUC</option>
  <option value="../jeremias2">CARTA DE JEREMIAS</option>
  <option value="../daniel2">DANIEL SUPLEMENTOS GRIEGOS</option>
</select>
</form>
<!-- <br>
<hr style="width:50%; margin: auto;" /> -->
<form>
<BR>
<select class="select" name="select2" style="width:90%;" onchange="location = this.value;">
  <option value="">EL NUEVO TESTAMENTO</option>
  <option value="../mateo">EVANGELIO SEGUN SAN MATEO</option>
  <option value="../marcos">EVANGELIO SEGUN SAN MARCOS</option>
  <option value="../lucas">EVANGELIO SEGUN SAN LUCAS</option>
  <option value="../juan">EVANGELIO SEGUN SAN JUAN</option>
  <option value="../hechos">HECHOS DE LOS APOSTOLES</option>
  <option value="../romanos">CARTA A LOS ROMANOS</option>
  <option value="../corintios">PRIMERA CARTA A LOS CORINTIOS</option>
  <option value="../corintios2">SEGUNDA CARTA A LOS CORINTIOS</option>
  <option value="../galatas">CARTA A LOS GALATAS</option>
  <option value="../efesios">CARTA A LOS EFESIOS</option>
  <option value="../filipenses">CARTA A LOS FILIPENSES</option>
  <option value="../colosenses">CARTA A LOS COLOSENSES</option>
  <option value="../tesalonicenses">PRIMERA CARTA A LOS TESALONICENSES</option>
  <option value="../tesalonicenses2">SEGUNDA CARTA A LOS TESALONICENSES</option>
  <option value="../timoteo">PRIMERA CARTA A TIMOTEO</option>
  <option value="../timoteo2">SEGUNDA CARTA A TIMOTEO</option>
  <option value="../tito">CARTA A TITO</option>
  <option value="../filemon">CARTA A FILEMON</option>
  <option value="../hebreos">CARTA A LOS HEBREOS</option>
  <option value="../santiago">CARTA DE SANTIAGO</option>
  <option value="../pedro">PRIMERA CARTA DE SAN PEDRO</option>
  <option value="../pedro2">SEGUNDA CARTA DE SAN PEDRO</option>
  <option value="../juan1">PRIMERA CARTA DE SAN JUAN</option>
  <option value="../juan2">SEGUNDA CARTA DE SAN JUAN</option>
  <option value="../juan3">TERCERA CARTA DE SAN JUAN</option>
  <option value="../judas">CARTA DE SAN JUDAS</option>
  <option value="../apocalipsis">APOCALIPSIS</option>
</select>
</form>
<br>
<button class="btnPower"><a href="../donar.php" style="text-decoration:none; color: white;">BONAR</a></button>
<!--<hr style="width:50%; margin: auto;" />-->
<!---Este texto solo visible para escritorio--->
<style>
@media screen and (max-width: 980px) {
.noneCel {
display: none;
    }
}
</style>
<!--
<div class="noneCel">
<br>
<img src="https://mebya.net/Jesus-Morris.jpg" width="90%"></a>
<br><br>
<hr style="width:50%; margin: auto;" />
<br>
<img src="https://mebya.net/jc/biblia/img/jesus_es_el_señor.png" width="90%"/><br>
<br>
</div>
-->
</center>

';
?>