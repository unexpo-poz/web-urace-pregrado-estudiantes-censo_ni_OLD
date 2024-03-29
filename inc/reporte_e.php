<?php
    include_once('inc/odbcss_c.php');
	include_once ('inc/config.php');
	global $raizDelSitio, $tLapso, $tProceso, $vicerrectorado;
	global $botonDerecho, $nombreDependencia;

    $fecha = date('d/m/Y', time() - 3600*date('I'));
    /*$h = "4.5";
	$hm = $h*60;
	$ms = $hm*60;
	$hora = gmdate("g:i A",time()-($ms));*/
	$hora = date("g:i a");

	$titulo = $tProceso ." " . $tLapso;

	switch ($_d['c_uni_ca']){
		case 2:
			$_d['carrera'] = "MECANICA";
			break;
		case 3:
			$_d['carrera'] = "ELECTRICA";
			break;
		case 4:
			$_d['carrera'] = "METALURGICA";
			break;
		case 5:
			$_d['carrera'] = "ELECTRONICA";
			break;
		case 6:
			$_d['carrera'] = "INDUSTRIAL";
			break;
	}



	print <<<P001
<table border="0" width="700" id="table1" cellspacing="1" cellpadding="0" 
 style="border-collapse: collapse;border-color:white;">
    <tr><td>
		<table border="0" width="750">
		<tr>
		<td width="125">
		<p align="right" style="margin-top: 0; margin-bottom: 0">
		<img border="0" src="/img/logo_unexpo.png" 
		     width="60" height="50"></p></td>
		<td width="500">
		<p class="titulo">
		Universidad Nacional Experimental Polit&eacute;cnica</p>
		<p class="titulo">
		Vicerrectorado $vicerrectorado</font></p>
		<p class="titulo">
		$nombreDependencia</font></td>
		<td width="125">&nbsp;</td>
		</tr><tr><td colspan="3" style="background-color:#F0F0F0;">
		<font style="font-size:2px;"> &nbsp;</font></td></tr>
	    </table></td>
    </tr>
    <tr>
        <td width="750" class="tit14"> 
         $titulo </td>
    </tr>
    <tr>
        <td width="750" class="inact" style="text-align:right;"> 
         Fecha: $fecha &nbsp; $hora </td>
    </tr>
    <tr>
        <td width="750" class="titulo"> 
        Censo procesado correctamente. Espera a la publicaci&oacute;n de los resultados: </td>
    </tr>
    <tr>
		<td width="750">
		<hr size="1">
        <div class="tit14" style="text-align:left; background: #F0F0F0">
		Datos Personales:</div>
        <table id="datos_personales" align="center" border="0" cellpadding="0" cellspacing="1" 
		 width="740" style="border-collapse:collapse;border-color:white; border-style:solid;">
			<tr class="datospBN">
				<td style="width: 220px;" >Apellidos:</td>
                <td style="width: 220px;" >Nombres:</td>
                <td style="width: 150px;" >C&eacute;dula:</td>
                <td style="width: 150px;" >&nbsp;</td>
            </tr>
            <tr class="datospBN">
				<td style="width: 220px;" ><span class="datospfBN">{$_d['apellidos']} {$_d['apellidos2']}</span>
				</td>
                <td style="width: 220px;" ><span class="datospfBN">{$_d['nombres']} {$_d['nombres2']}</span>
				</td>
                <td style="width: 150px;" ><span class="datospfBN">
					{$_d['nac_eS']} &nbsp;-&nbsp; {$_d['ci_e']} </span>
				</td>
                <td style="width: 150px;" >&nbsp;
					<input name="exp_e" maxlength="12" id="exp_e" 
					 class="datospf" style="width: 130px;" type="hidden" 
					 value="{$_d['exp_e']}">
				</td>
            </tr>
			<tr class="datospBN">
				<td style="width: 220px;" >Fecha de Nacimiento:</td>
                <td style="width: 220px;" >Pa&iacute;s de Nacimiento:</td>
                <td style="width: 150px;" >Lugar de Nacimiento:</td>
                <td style="width: 150px;" >Especialidad a Cursar:</td>
            </tr>
            <tr class="datospBN">
				<td style="width: 220px;" >
					<input type="hidden" name="f_nac_e" value="{$_d['f_nac_e']}">
					<span class="datospfBN">
					{$_d['diaN']}&nbsp; / &nbsp; {$_d['mesN']} 
					&nbsp; / &nbsp; 19{$_d['anioN']} </span>
				</td>
                <td style="width: 220px;" >
					<span class="datospfBN">{$_d['p_nac_e']}</span>
				</td>
                <td style="width: 150px;" >
					<span class="datospfBN">{$_d['l_nac_e']}</span>
				</td>
                <td style="width: 150px;" >
					<span class="datospfBN">ING. {$_d['carrera']}</span>
			
				</td>
			</tr>
            <tr class="datospBN">
				<td style="width: 220px;" >Edad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Estado Civil:</td>
				<td style="width: 150px;" >Sexo:</td>
                <td style="width: 220px;" >Correo Electr&oacute;nico:</td>
                <td style="width: 150px; ">&nbsp;</td>
                
            </tr>
            <tr class="datospBN">
				<td style="width: 220px;" >
					<span class="datospfBN">{$_d['edad']}
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						{$_d['edo_c_eS']}</span>
				</td>
				<td style="width: 220px;" ><span class="datospfBN">
					{$_d['sexoS']}</span>
				</td>
                <td style="width: 220px;" ><span class="datospfBN">
					{$_d['correo1']}</span>
				</td>
                <td style="width: 150px;" ><span class="datospfBN">
				    {$_d['correo2']}</span>
					&nbsp;</span>
				</td>
                <td style="width: 150px;" >&nbsp;</td>
			</tr>
		</table>
	</td></tr>
	<tr>
    <td width="750">
		<hr size ="1">
        <div class="tit14" style="text-align:left; background: #F0F0F0">
		Direcci&oacute;n Permanente:</div>
        <table id="dir_1" align="center" border="0" cellpadding="1" cellspacing="2" 
		 width="740" style="border-collapse:collapse;border-color:white; border-style:solid;">
            <tbody>
                <tr class="datospBN">
                    <td colspan="2" style="width: 400px;" >
                        Avenida/Calle:</td>
                    <td style="width: 200px;" >
                        Barrio/Urbanizaci&oacute;n:</td>
					<td style="width: 200px;" >
                        Manzana/Edificio:</td>
                    <td style="width: 140px;" >
                        Casa/Apto Nro:</td>
                </tr>
                <tr class="datospBN">
                    <td colspan="2" style="width: 400px;" >
						<span class="datospfBN">{$_d['avenida']}</span>
				    </td>
                    <td style="width: 200px;" >
						<span class="datospfBN">{$_d['urbanizacion']}</span>
					</td>
					<td style="width: 200px;" >
						<span class="datospfBN">{$_d['manzana']}</span>
					</td>
                    <td style="width: 140px;" >
						<span class="datospfBN">{$_d['nrocasa']}</span>
					</td>
				</tr>
                <tr class="datospBN">
                    <td style="width: 200px;" >
                        Ciudad:</td>
                    <td style="width: 200px;" >
                        Estado:</td>
                    <td style="width: 200px;" >
                        Tel&eacute;fono:</td>
                    <td style="width: 140px;" >
                        &nbsp;</td>
                </tr>
                <tr class="datospBN">
                    <td style="width: 200px;" >
						<span class="datospfBN">{$_d['ciudad']}</span>
				    </td>
                    <td style="width: 200px;" >
						<span class="datospfBN">{$_d['estado']}</span>
				    </td>
                    <td style="width: 200px;" >
						<span class="datospfBN">
						{$_d['codT']}&nbsp; - &nbsp;{$_d['telefono']}</span>
                    <td style="width: 140px;" >&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
    </td>
    </tr>
	<tr>
    <td width="750">
		<hr size ="1">
        <div class="tit14" style="text-align:left; background: #F0F0F0">
		Direcci&oacute;n de Residencia:
		</div>
        <table id="dir_2" align="center" border="0" cellpadding="1" cellspacing="2" 
		 width="740" style="border-collapse:collapse;border-color:white; border-style:solid;">
            <tbody>
                <tr class="datospBN">
                    <td colspan="2" style="width: 400px;" >
                        Avenida/Calle:</td>
                    <td style="width: 200px;" >
                        Barrio/Urbanizaci&oacute;n/Edificio:</td>
                    <td style="width: 140px;" >
                        Casa/Apto Nro:</td>
                </tr>
                <tr class="datospBN">
                    <td colspan="2" style="width: 400px;" >
						<span class="datospfBN">{$_d['avCalleR']}</span>&nbsp;
				    </td>
                    <td style="width: 200px;" >
						<span class="datospfBN">{$_d['barrioR']}</span>&nbsp;
                    <td style="width: 140px;" >
						<span class="datospfBN">{$_d['casaR']}</span>&nbsp;
					</td>
				</tr>
                <tr class="datospBN">
                    <td style="width: 200px;" >
                        Ciudad:</td>
                    <td style="width: 200px;" >
                        Estado:</td>
                    <td style="width: 200px;" >
                        Tel&eacute;fono:</td>
                    <td style="width: 140px;" >
                        &nbsp;</td>
                </tr>
                <tr class="datospBN">
                    <td style="width: 200px;" >
						<span class="datospfBN">{$_d['ciudadR']}</span>&nbsp;
				    </td>
                    <td style="width: 200px;" >
						<span class="datospfBN">{$_d['estadoR']}</span>&nbsp;
				    </td>
                    <td style="width: 200px;" >
						<span class="datospfBN">
						{$_d['codTR']}&nbsp; - &nbsp;{$_d['telefonoR']}</span>
                    <td style="width: 140px;" >&nbsp;
					</td>
				</tr>
			</tbody>
		</table>
    </td>
    </tr>
	<tr>
    <td width="750">
		<hr size ="1">
        <div class="tit14" style="text-align:left; background: #F0F0F0">
		Datos Acad&eacute;micos:
		</div>
        <table id="dAcad" align="center" border="0" cellpadding="1" cellspacing="2" 
		 width="740" style="border-collapse:collapse;border-color:white; border-style:solid;">
            <tbody>
                <tr class="datospBN">
                    <td colspan="6" style="width: 450px;" >
                        Nombre del Plantel de Procedencia:</td>
                    <td style="width: 145px;" >
                        Tipo de Plantel:</td>
                    <td style="width: 145px;" >
                        Opcion CNU:</td>
					<td style="width: 145px;" >
                        Indice Bachillerato:
                </tr>
                <tr class="datospBN">
                    <td colspan="6" style="width: 450px;" >
						<span class="datospfBN">{$_d['plantel']}</span>
				    </td>
                    <td style="width: 165px;" >
						<span class="datospfBN">{$_d['tipo_plantel']}</span>
                    <td style="width: 125px;" >
						<span class="datospfBN">{$_d['opcion_cnu']}</span>
					</td>
					<td style="width: 120px;" >
						<span class="datospfBN">{$_d['ind_cnu']}</span>
					</td>

				</tr>
                <tr class="datospBN">
                    <td colspan="2" style="width: 150px;" >
                        Sistema de Estudio:</td>
                    <td colspan="2" style="width: 150px;" >
                        Turno:</td>
                    <td colspan="2" style="width: 150px;" >
                        T&iacute;tulo Obtenido:
                    <td style="width: 195px;" >
                        Promedio de Bachillerato:</td>
                    <td style="width: 125px;" >
                        A ingresar por:</td>
                </tr>
                <tr class="datospBN">
                    <td style="width: 140px; vertical-align:top;" >
						<span class="datospfBN">{$_d['sistema_estudio']}</span>
				    </td>
                    <td style="width: 10px;" >&nbsp;</td>
                    <td style="width: 140px; vertical-align:top;" >
						<span class="datospfBN">{$_d['turno_estudio']}</span>
					</td>
                    <td style="width: 10px;" >&nbsp;</td>
                    <td style="width: 140px; vertical-align:top;" >
						<span class="datospfBN">{$_d['titulo_b']}</span>
				    </td>
                    <td style="width: 10px;" >&nbsp;</td>
                    <td style="width: 165px;vertical-align:top;" >
						<span class="datospfBN">{$_d['promedio']}</span>
                    </td>
					<td style="width: 125px;vertical-align:top;" >
						<span class="datospfBN">{$_d['ingreso']}</span>
					</td>
				</tr>
				 <tr class="datospBN">
                    <td colspan="2" style="width: 150px;" >
                        Promedio de Matem&aacute;tica:</td>
                    <td colspan="2" style="width: 150px;" >
                        Promedio de Castellano:</td>
                    <td colspan="2" style="width: 150px;" >
                        Promedio de    F&iacute;sica:
                    <td style="width: 195px;" >
                        Promedio de    Qu&iacute;mica:</td>
                    <td style="width: 125px;" >
                        Nro de Rusnies:</td>
                </tr>
                <tr class="datospBN">
                    <td style="width: 140px; vertical-align:top;" >
						<span class="datospfBN">{$_d['promedio_mate']}</span>
				    </td>
                    <td style="width: 10px;" >&nbsp;</td>
                    <td style="width: 140px; vertical-align:top;" >
						<span class="datospfBN">{$_d['promedio_cast']}</span>
					</td>
                    <td style="width: 10px;" >&nbsp;</td>
                    <td style="width: 140px; vertical-align:top;" >
						<span class="datospfBN">{$_d['promedio_fisi']}</span>
				    </td>
                    <td style="width: 10px;" >&nbsp;</td>
                    <td style="width: 165px;vertical-align:top;" >
						<span class="datospfBN">{$_d['promedio_quim']}</span>
					</td>
                    <td style="width: 125px;vertical-align:top;" >
						<span class="datospfBN">{$_d['sit_e']}</span>
					</td>
				</tr>
			</tbody>
		</table>
    </td>
    </tr>	
	<tr>
    <td width="750">
		<hr size ="1">
        <div class="tit14" style="text-align:left; background: #F0F0F0">
		Datos Socioecon&oacute;micos:
		</div>
        <table id="dSocioE" align="center" border="0" cellpadding="1" cellspacing="2" 
		 width="740" style="border-collapse:collapse;border-color:white; border-style:solid;">
            <tbody>
                <tr class="datospBN">
                    <td style="width: 185px;" >
                        Instrucci&oacute;n del Padre:</td>
                    <td style="width: 185px;" >
                        Ocupaci&oacute;n del Padre:</td>
                    <td style="width: 185px;" >
                        Instrucci&oacute;n de la Madre:</td>
                    <td style="width: 185px;" >
                        Ocupaci&oacute;n de la Madre:</td>
                </tr>
                <tr class="datospBN">
                    <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['instr_padre']}</span>
				    </td>
                    <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['ocup_padre']}</span>
					</td>
                    <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['instr_madre']}</span>
				    </td>
                    <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['ocup_madre']}</span>
					</td>
				</tr>
				<tr class="datospBN">
                    <td colspan="2" style="width: 370px;" >Tipo de Vivienda que Habita:</td>
                    <td colspan="2" style="width: 370px;" >Ingreso Familiar Mensual:</td>
				</tr>
				<tr class="datospBN">
                    <td colspan="2" style="width: 370px; vertical-align:top;" >
						<span class="datospfBN">{$_d['tipo_vivienda']}</span>
						<span class="datospfBN">{$_d['monto_alq']}</span>
					</td>
                    <td colspan="2" style="width: 370px; vertical-align:top;" >
						<span class="datospfBN">{$_d['ingreso_fBs']}</span>
				    </td>
				</tr>
				<tr class="datospBN">
                    <td style="width: 185px;" >Posee Beca:</td>
                    <td style="width: 185px;" >Etnia Indigena:</td>
					<td style="width: 185px;" >Trabaja:</td>
				</tr>
				<tr class="datospBN">
                     <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['becario']} - {$_d['organismo']}</span>
				    </td>
					 <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['etnia_indigenaS']} - {$_d['etnia_indigena']}</span>
				    </td>
					 <td style="width: 185px; vertical-align:top;" >
						<span class="datospfBN">{$_d['trabajaS']} - {$_d['turno_trabajo']}</span>
				    </td>
				</tr>
			</tbody>
		</table>
	</td></tr>
	<tr  class="datosp" style="background-color:white;">
		<td width="740">&nbsp;
			<hr size="1" width="740">
	</tr>
	<tr class="datosp" style="background-color:white;">
		<td>
P001
;
	// en 'inc/recaudos.php' esta la lista de los recaudos y la fecha en que 
	// el estudiante debe asistir para formalizar su inscripcion. Editar a
	// conveniencia cada semestre.
	include_once('inc/recaudos.php');
	print <<<P002
		</td>
	</tr>
	<tr class="datosp" style="background-color:white;">
		<td>        
		<table id="tBoton" align="center" border="0" cellpadding="1" cellspacing="2"
		 width="740" style="border-collapse:collapse;border-color:white; border-style:solid; background:white;">
			<tr><td style="width: 200px">
				<input class="boton" type="reset" value="Imprimir"
					onclick="window.print();"></td>
				<td style="width: 200px">
				<input class="boton" type="button" value="Regresar y Modificar Datos" id="Regresar" 
					onclick="this.style.display='none'; document.datos_p.submit();">
				</td>
				<td style="width: 200px">
				<input class="boton" type="button" value="Cerrar" id="Cerrar" 
					onclick="window.close();">
				</td>
			</tr>
		</table></td>
	</tr>
	</body>
	</table>
P002
; 
?>
