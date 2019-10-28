<!doctype html>
<html lang="es" class="no-js">
<head>
	<title>@yield('meta_title', setting('site.title'))</title>
	<meta name="description" content="@yield('meta_description', setting('site.description')) - {{ setting('site.title') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Open Graph -->
	<meta property="og:site_name" content="{{ setting('site.title') }}" />
	<meta property="og:title" content="@yield('meta_title')" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:image" content="@yield('meta_image', url('/') . '/images/apple-touch-icon.png')" />
	<meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

	<!-- Icons -->
	<meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
	<meta name="msapplication-TileColor" content="#8cc641" />
	<link rel="shortcut icon" href="{{ url('/') }}/images/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/images/apple-touch-icon.png" />

	<meta http-equiv=Content-Type content="text/html; charset=windows-1252" />

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/msoexcel.css" />

</head>

<body>
	<div id="hdr" align=center x:publishsource="Excel">
		<table border=0 cellpadding=0 cellspacing=0 width=708 class=xl6626489 style='border-collapse:collapse;table-layout:fixed;width:531pt'>
			<col class=xl6626489 width=23>
			<col class=xl6626489 width=92>
			<col class=xl6626489 width=104>
			<col class=xl6626489 width=93>
			<col class=xl6626489 width=89>
			<col class=xl6626489 width=101>
			<col class=xl6626489 width=103>
			<tr class=xl6526489 height=20 style='mso-height-source:userset;height:15.0pt'>
				<td colspan=2 height=20 class=titulo_campo width=115 style='height:15.0pt;width:86pt'>FECHA</td>
				<td colspan=6 class=titulo_campo width=593 style='border-left:none;width:445pt'>PRODUCTO</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td colspan=2 height=33 class=campo style='height:24.95pt'>23/09/2019</td>
				<td colspan=6 class=campo width=593 style='border-left:none;width:445pt'>DEMULSIFICANTE S-075</td>
			</tr>
			<tr class=xl6726489 height=21 style='mso-height-source:userset;height:15.75pt'>
				<td colspan=6 height=21 class=titulo_campo width=502 style='height:15.75pt;width:377pt'>CLIENTE</td>
				<td colspan=2 class=titulo_campo width=206 style='border-left:none;width:154pt'>RIF</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td colspan=6 height=33 class=campo style='height:24.95pt'>GPB NEFTEGAZ SERVICES B.V. SUCURSAL, C.A.</td>
				<td colspan=2 class=campo style='border-left:none'>J-40144300-1</td>
			</tr>
			<tr class=xl6526489 height=21 style='mso-height-source:userset;height:15.75pt'>
				<td colspan=3 height=21 class=titulo_campo width=219 style='height:15.75pt;width:164pt'>Nº ORDEN DE COMPRA</td>
				<td colspan=2 class=titulo_campo width=182 style='border-left:none;width:137pt'>Nº LOTE</td>
				<td class=titulo_campo width=101 style='border-top:none;border-left:none;width:76pt'>PRESENTACIÓN</td>
				<td class=titulo_campo width=103 style='border-top:none;border-left:none;width:77pt'>CANTIDAD</td>
				<td class=titulo_campo width=103 style='border-top:none;border-left:none;width:77pt'>UNIDAD</td>
			</tr>
			<tr class=xl6926489 height=33 style='mso-height-source:userset;height:24.95pt'>
				<td colspan=3 height=33 class=campo width=219 style='height:24.95pt;width:164pt'>PROCESO Nº: PZ000683 - PEDIDO Nº: 4550020269<span style='mso-spacerun:yes'> </span></td>
				<td colspan=2 class=campo width=182 style='border-left:none;width:137pt'>SOL-104-230919</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>GRANEL</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>25.000</td>
				<td class=campo style='border-top:none;border-left:none'>LITROS</td>
			</tr>
			<tr class=xl6926489 height=33 style='mso-height-source:userset;height:24.95pt'>
				<td colspan=8 height=33 class=titulo_campo width=708 style='height:24.95pt;width:531pt'>ANÁLISIS EFECTUADOS A 25 ºC</td>
			</tr>
			<tr class=xl7026489 height=20 style='mso-height-source:userset;height:15.0pt'>
				<td rowspan=2 height=39 class=titulo_campo width=23 style='height:29.25pt;border-top:none;width:17pt'>Nº</td>
				<td colspan=2 rowspan=2 class=titulo_campo width=196 style='width:147pt'>PARÁMETRO</td>
				<td rowspan=2 class=titulo_campo width=93 style='border-top:none;width:70pt'>UNIDAD</td>
				<td rowspan=2 class=titulo_campo width=89 style='border-top:none;width:67pt'>RESULTADO</td>
				<td rowspan=2 class=titulo_campo width=101 style='border-top:none;width:76pt'>MÉTODO</td>
				<td colspan=2 class=titulo_campo width=206 style='border-left:none;width:154pt'>TOLERANCIA</td>
			</tr>
			<tr class=xl6926489 height=19 style='mso-height-source:userset;height:14.25pt'>
				<td height=19 class=titulo_campo width=103 style='height:14.25pt;border-top:none;border-left:none;width:77pt'>MIN.</td>
				<td class=titulo_campo width=103 style='border-top:none;border-left:none;width:77pt'>MÁX.</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>1</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>Gravedad Específica</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>-</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>0,929</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>NTF 3401:2009</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>0,900</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>0,940</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>2</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>Solubilidad</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>-</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>Insoluble en Agua</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>-</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>Insoluble en Agua<span style='mso-spacerun:yes'> </span></td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>Insoluble en Agua</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>3</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>Color
				Visual</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>-</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>Ámbar Claro</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>-</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>Ámbar Claro</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>Ámbar Oscuro</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>4</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>Viscosidad
				(cPs)</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>cPs</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>69</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>NVF 577:2007</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>30</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>100</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>5</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>Punto de inflamación<span style='mso-spacerun:yes'> </span></td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>°C<span style='mso-spacerun:yes'> </span></td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>59,1</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>ASTM D-93-10</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&#8805; 40</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&#8805; 40<span style='mso-spacerun:yes'> </span></td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>6</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>Porcentaje de Sólidos</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>%</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>42,30</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>ASTM D-1025-10</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>38</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>46</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>&nbsp;</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>&nbsp;</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>&nbsp;</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>&nbsp;</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>&nbsp;</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>&nbsp;</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>&nbsp;</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>&nbsp;</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>&nbsp;</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>&nbsp;</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>&nbsp;</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>&nbsp;</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>&nbsp;</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>&nbsp;</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>&nbsp;</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
			</tr>
			<tr height=33 style='mso-height-source:userset;height:24.95pt'>
				<td height=33 class=campo width=23 style='height:24.95pt;border-top:none;width:17pt'>&nbsp;</td>
				<td colspan=2 class=parametro width=196 style='border-left:none;width:147pt'>&nbsp;</td>
				<td class=campo width=93 style='border-top:none;border-left:none;width:70pt'>&nbsp;</td>
				<td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
				<td class=campo width=101 style='border-top:none;border-left:none;width:76pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
				<td class=campo width=103 style='border-top:none;border-left:none;width:77pt'>&nbsp;</td>
			</tr>
			<tr class=xl6926489 height=33 style='mso-height-source:userset;height:24.95pt'>
				<td colspan=8 height=33 class=titulo_campo width=708 style='height:24.95pt;width:531pt'>OBSERVACIONES</td>
			</tr>
			<tr height=77 style='mso-height-source:userset;height:57.75pt'>
				<td colspan=8 height=77 class=campo style='height:57.75pt'>&nbsp;</td>
			</tr>
			<tr height=19 style='height:14.25pt'>
				<td height=19 class=xl6626489 width=708 style='height:14.25pt'></td>
			</tr>
			<tr class=xl7026489 height=20 style='mso-height-source:userset;height:15.0pt'>
				<td colspan=5 height=20 class=titulo_campo width=401 style='height:15.0pt;width:301pt'>ELABORADO POR</td>
				<td colspan=3 class=titulo_campo width=307 style='border-left:none;width:230pt'>APROBADO POR</td>
			</tr>
			<tr height=20 style='mso-height-source:userset;height:15.0pt'>
				<td colspan=2 height=20 class=xl9526489 width=115 style='height:15.0pt;width:86pt'>NOMBRE:</td>
				<td colspan=3 class=xl9726489 style='border-right:.5pt solid black'>ANTONIO DÍAZ</td>
				<td class=xl7426489 width=101 style='border-left:none;width:76pt'>NOMBRE:</td>
				<td colspan=2 class=xl9926489 width=206 style='border-right:.5pt solid black;width:154pt'>ANGIE ZICARDI</td>
			</tr>
			<tr height=20 style='mso-height-source:userset;height:15.0pt'>
				<td colspan=2 height=20 class=xl10126489 style='height:15.0pt'>CARGO</td>
				<td colspan=3 class=xl9726489 style='border-right:.5pt solid black'>LABORATORISTA</td>
				<td class=xl7526489 style='border-left:none'>CARGO</td>
				<td colspan=2 class=xl9926489 width=206 style='border-right:.5pt solid black;width:154pt'>COORD. GESTIÓN DE CALIDAD</td>
			</tr>
			<tr class=xl7726489 height=53 style='mso-height-source:userset;height:39.95pt'>
				<td colspan=2 height=53 class=xl10326489 style='height:39.95pt'>FIRMA:</td>
				<td colspan=3 class=xl10526489 style='border-right:.5pt solid black'>&nbsp;</td>
				<td class=xl7626489 style='border-left:none'>FIRMA:</td>
				<td colspan=2 class=xl10726489 style='border-right:.5pt solid black'>&nbsp;</td>
			</tr>
		</table>
	</div>
</body>
</html>
