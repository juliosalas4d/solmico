<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"
   "http://www.w3.org/TR/REC-html40/strict.dtd">

{{-- <!doctype html> --}}
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

	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

	<style id="Despachos">
	<!--table
		{mso-displayed-decimal-separator:"\,";
		mso-displayed-thousand-separator:"\.";}
        .head
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo_head
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:14.0pt;
            font-weight:700;
            font-style:bold;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:18.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo_despa
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border-top:none;
            border-right:none;
            border-bottom:none;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .titulo_campo
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:#D9D9D9;
            mso-pattern:black none;
            mso-protection:locked hidden;
            white-space:normal;}
        .campo
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:DejaVu Sans, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .campo_despa
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:"\#\,\#\#0";
            text-align:left;
            vertical-align:middle;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .campo_guia
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:0000;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .niveles
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            background:#D9D9D9;
            mso-pattern:black none;
            mso-protection:locked hidden;
            white-space:normal;}
        .tanque
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .campo_tanque
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:"\#\,\#\#0\.0";
            text-align:center;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .total_tanque
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:8.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:right;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        .firma
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}
        .campo_firma
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;

            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:top;
            border-top:none;
            border-right:none;
            border-bottom:.5pt solid windowtext;
            border-left:none;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:locked hidden;
            white-space:normal;}

        .parametro
        {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:windowtext;
            font-size:9.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:middle;
            border:.5pt solid windowtext;
            mso-background-source:auto;
            mso-pattern:auto;
            mso-protection:unlocked visible;
            white-space:normal;}
        -->
	</style>

</head>

<body>
	<div id="hdr" align=center>
		<table border=0 cellpadding=0 cellspacing=0 width=708 style='border-collapse:collapse;table-layout:fixed;width:531pt'>

            <tr>
                <td colspan=2 class=head style='height:50pt;width:120'>
                    <img src="{{ public_path('images/SOLMICO.png') }}" style='width:120'>
                </td>
                <td colspan=5 class=titulo_head style='width:404'>CERTIFICADO DE ANÁLISIS DE LABORATORIO
                </td>
                <td height=31 class=head style='width:120'>FGC-160<br>
                    Ver. 09/2019
                </td>
            </tr>
			<tr>
				<td colspan=2 class=titulo_campo style='height:15.0pt;width:86pt'>FECHA</td>
				<td colspan=6 class=titulo_campo style='width:445pt'>PRODUCTO</td>
			</tr>
			<tr>
				<td colspan=2 class=campo style='height:25pt'>{{date('d/m/Y', strtotime($despacho->fechasal))}}</td>
				<td colspan=6 class=campo style='width:445pt'>{{ $producto->producto }}</td>
			</tr>
			<tr>
				<td colspan=6 class=titulo_campo style='height:15pt;width:377pt'>CLIENTE</td>
				<td colspan=2 class=titulo_campo style='width:154pt'>RIF</td>
			</tr>
			<tr>
				<td colspan=6 class=campo style='height:25pt'>{{ $cliente->nombre }}</td>
				<td colspan=2 class=campo>{{ $cliente->rif }}</td>
			</tr>
			<tr>
				<td colspan=3 class=titulo_campo style='height:15pt;width:164pt'>Nº ORDEN DE COMPRA</td>
				<td colspan=2 class=titulo_campo style='width:137pt'>Nº LOTE</td>
				<td class=titulo_campo style='width:76pt'>PRESENTACIÓN</td>
				<td class=titulo_campo style='width:77pt'>CANTIDAD</td>
				<td class=titulo_campo style='width:77pt'>UNIDAD</td>
			</tr>
			<tr>
				<td colspan=3  class=campo style='height:25pt;width:164pt'>
                    @if($proyecto->numcont == NULL)
                        PEDIDO Nº: {{ $proyecto->pedido }}
                    @else
                        CONTRATO Nº: {{ $proyecto->numcont }} - PEDIDO Nº: {{ $proyecto->pedido }}
                    @endif
                </td>
				<td colspan=2 class=campo style='width:137pt'>{{ $lote->lote }}</td>
				<td class=campo style='width:76pt'>GRANEL</td>
				<td class=campo style='width:77pt'>{{ number_format($despacho->cant_des, '0', ',', '.') }}</td>
				<td class=campo>{{ $unidad->unidad }}</td>
			</tr>
			<tr>
				<td colspan=8 class=titulo_campo style='height:15pt;width:531pt'>ANÁLISIS EFECTUADOS A 25 ºC</td>
			</tr>
			<tr>
				<td rowspan=2 class=titulo_campo style='height:30pt;width:10pt'>Nº</td>
				<td colspan=2 rowspan=2 class=titulo_campo style='width:147pt'>PARÁMETRO</td>
				<td rowspan=2 class=titulo_campo style='width:70pt'>UNIDAD</td>
				<td rowspan=2 class=titulo_campo style='width:67pt'>RESULTADO</td>
				<td rowspan=2 class=titulo_campo style='width:76pt'>MÉTODO</td>
				<td colspan=2 class=titulo_campo style='width:154pt'>TOLERANCIA</td>
			</tr>
			<tr>
				<td class=titulo_campo style='height:15pt;width:77pt'>MIN.</td>
				<td class=titulo_campo style='width:77pt'>MÁX.</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param1->parametro ?? '') != NULL) 1 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param1->parametro ?? '' }}</td>
				<td class=campo style='width:70pt'>{{ $param1->siglas ?? '' }}</td>
				<td class=campo style='width:67pt'>{{ $lote->valor1 ?? '' }}</td>
				<td class=campo style='width:76pt'>{{ $param1->metodo ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param1->min ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param1->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param2->parametro ?? '') != NULL) 2 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param2->parametro ?? '' }}</td>
				<td class=campo style='width:70pt'>{{ $param2->siglas ?? '' }}</td>
				<td class=campo style='width:67pt'>{{ $lote->valor2 ?? '' }}</td>
				<td class=campo style='width:76pt'>{{ $param2->metodo ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param2->min ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param2->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param3->parametro ?? '') != NULL) 3 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param3->parametro ?? '' }}</td>
				<td class=campo style='width:70pt'>{{ $param3->siglas ?? '' }}</td>
				<td class=campo style='width:67pt'>{{ $lote->valor3 ?? '' }}</td>
				<td class=campo style='width:76pt'>{{ $param3->metodo ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param3->min ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param3->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param4->parametro ?? '') != NULL) 4 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param4->parametro ?? '' }}</td>
				<td class=campo style='width:70pt'>{{ $param4->siglas ?? '' }}</td>
				<td class=campo style='width:67pt'>{{ $lote->valor4 ?? '' }}</td>
				<td class=campo style='width:76pt'>{{ $param4->metodo ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param4->min ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param4->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param5->parametro ?? '') != NULL) 5 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param5->parametro ?? '' }}</td>
				<td class=campo style='width:70pt'>{{ $param5->siglas ?? '' }}</td>
				<td class=campo style='width:67pt'>{{ $lote->valor5 ?? '' }}</td>
				<td class=campo style='width:76pt'>{{ $param5->metodo }}</td>
				<td class=campo style='width:77pt'>{{ $param5->min ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param5->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param6->parametro ?? '') != NULL) 6 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param6->parametro ?? '' }}</td>
				<td class=campo style='width:70pt'>{{ $param6->siglas ?? '' }}</td>
				<td class=campo style='width:67pt'>{{ $lote->valor6 ?? '' }}</td>
				<td class=campo style='width:76pt'>{{ $param6->metodo ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param6->min ?? '' }}</td>
				<td class=campo style='width:77pt'>{{ $param6->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param7->parametro ?? '') != NULL) 7 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param7->parametro ?? ''}}</td>
				<td class=campo style='width:70pt'>{{ $param7->siglas ?? '' }}</td>
                <td class=campo style='width:67pt'>{{ $lote->valor7 ?? '' }}</td>
                <td class=campo style='width:76pt'>{{ $param7->metodo ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param7->min ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param7->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param8->parametro ?? '') != NULL) 8 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param8->parametro ?? ''}}</td>
				<td class=campo style='width:70pt'>{{ $param8->siglas ?? '' }}</td>
                <td class=campo style='width:67pt'>{{ $lote->valor8 ?? '' }}</td>
                <td class=campo style='width:76pt'>{{ $param8->metodo ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param8->min ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param8->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param9->parametro ?? '') != NULL) 9 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param9->parametro ?? ''}}</td>
				<td class=campo style='width:70pt'>{{ $param9->siglas ?? '' }}</td>
                <td class=campo style='width:67pt'>{{ $lote->valor9 ?? '' }}</td>
                <td class=campo style='width:76pt'>{{ $param9->metodo ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param9->min ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param9->max ?? '' }}</td>
			</tr>
			<tr>
				<td class=campo style='height:25pt;width:10pt'>
                    @if(($param10->parametro ?? '') != NULL) 10 @endif
                </td>
				<td colspan=2 class=parametro style='width:147pt'>{{ $param10->parametro ?? ''}}</td>
				<td class=campo style='width:70pt'>{{ $param10->siglas ?? '' }}</td>
                <td class=campo style='width:67pt'>{{ $lote->valor10 ?? '' }}</td>
                <td class=campo style='width:76pt'>{{ $param10->metodo ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param10->min ?? '' }}</td>
                <td class=campo style='width:77pt'>{{ $param10->max ?? '' }}</td>
			</tr>
			
			<tr>
				<td colspan=8 class=titulo_campo style='height:15pt;width:531pt'>OBSERVACIONES</td>
			</tr>
			<tr>
				<td colspan=8 class=campo style='border-bottom:.5pt solid black;height:90pt'>{{ $lote->obs }}</td>
			</tr>
			<tr>
				<td colspan=8 style='height:10pt'></td>
			</tr>
			<tr>
				<td colspan=4 class=titulo_campo style='height:15.0pt;width:301pt'>ELABORADO POR</td>
				<td colspan=4 class=titulo_campo style='width:230pt'>APROBADO POR</td>
			</tr>
			<tr>
				<td colspan=1 class=titulo_despa style='height:15.0pt;width:86pt'>NOMBRE:</td>
				<td colspan=3 class=campo_despa style='border-right:.5pt solid black'>ANTONIO DÍAZ</td>
				<td colspan=1 class=titulo_despa style='border-left:.5pt solid black;width:76pt'>NOMBRE:</td>
				<td colspan=3 class=campo_despa style='border-right:.5pt solid black;width:154pt'>ANGIE ZICARDI</td>
			</tr>
			<tr>
				<td colspan=1 class=titulo_despa>CARGO</td>
				<td colspan=3 class=campo_despa style='border-right:.5pt solid black'>LABORATORISTA</td>
				<td colspan=1 class=titulo_despa>CARGO</td>
				<td colspan=3 class=campo_despa width=206 style='border-right:.5pt solid black;width:154pt'>COORD. GESTIÓN DE CALIDAD</td>
			</tr>
			<tr>
				<td colspan=1 class=firma style='height:39.95pt'>FIRMA:</td>
				<td colspan=3 class=campo_firma style='border-right:.5pt solid black'>&nbsp;</td>
				<td colspan=1 class=firma style='border-left:none'>FIRMA:</td>
				<td colspan=3 class=campo_firma style='border-right:.5pt solid black'>&nbsp;</td>
			</tr>
		</table>
	</div>

</body>
</html>
