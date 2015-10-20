<?php
	
echo '<html>';
echo '<head>';
echo '<style>';
echo 'thead {color:green;}
table, th {
    border: 1px solid black;
}';
echo '</style>';

echo '</head>';

echo '<tbody>';
					

echo '<form name="nuevo_usuario" >';
echo '<table width="50%">';
echo '<leghth><h1>Registrate </h1></leghth>';
echo '<leghth><h1>Es gratis (y lo seguira siendo) </h1></leghth>';
echo '<tr>';
echo                '<td><b>Nombre:</b></td>';
echo '					<td><input type="text" size="25" /></td>';
echo '				</tr>';
echo '				<tr>';
echo '					<td><b>Apellidos:</b></td>';
echo '					<td><input type="text"  size="25" /></td>';
echo '				</tr>';
echo '				<tr>';
echo '					<td><b>Tu Email:</b></td>';
echo '					<td><input type="text"  size="25" /></td>';
echo '				</tr>';
echo '				<tr>';
echo '					<td><b>Escribe de nuevo el correo electronico:</b></td>';
echo '					<td><input type="text" size="25" /></td>';
echo '				</tr>';
echo '				<tr>';
echo '					<td><b>Contraseña nueva</b></td>';
echo '					<td><input type="text"  size="25" /></td>';
echo '				</tr>';
echo '				<tr>';
echo '					<td><b>Sexo</b></td>';
echo 
'<td><select name="OS">
   <option value="1">MASCULINO</option> 
   <option value="2">FEMENINO</option> 
</select></td>';
echo '<tr>';
echo '<td><b>Fecha de Nacimiento</b></td>';
echo 
'<td><select name="OS">
   <option value="1">Dia:</option> 
   <option value="2">1</option> 
    <option value="2">2</option>
       <option value="2">3</option> 
    <option value="2">4</option> 
       <option value="2">5</option> 
    <option value="2">6</option> 
</select></td>';
echo 
'<td><select name="OS">
   <option value="1">Mes:</option> 
   <option value="2">Enero</option> 
   <option value="2">Febrero</option>
   <option value="2">Marzo</option>
   <option value="2">Abril</option>
   <option value="2">Mayo</option>
   <option value="2">Junio</option>
   <option value="2">Julio</option>
   <option value="2">Agosto</option>
   <option value="2">Septiembre</option>
   <option value="2">Octubre</option>
   <option value="2">Noviembre</option>
   <option value="2">Diciembre</option>

</select></td>';
echo 
'<td><select name="OS">
   <option value="2000">Anio</option> 
   <option value="2">2001</option> 
   <option value="2">2002</option> 
   <option value="2">2003</option> 
   <option value="2">2004</option> 
   <option value="2">2005</option> 
   <option value="2">2006</option> 
   <option value="2">2007</option>                   
</select></td>';				
echo '				</tr>';
echo '				<tr>';
echo '					<td colspan="2"><center><a href="/deber3/pagina/index.html"><input style="background-color: #3CB371" value="Registrate"  align="center"></a></center></td>';
echo '			</table>';
echo '		</form>';		
echo '		</tbody>';
echo '	</html>	';
	
?>