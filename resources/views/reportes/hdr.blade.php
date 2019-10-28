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
	<style id="HDR">
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
            border:0.5pt solid windowtext;
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
            font-size:18.0pt;
            font-weight:700;
            font-style:bold;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:0.5pt solid windowtext;
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
            font-size:9.0pt;
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
            font-size:10.0pt;
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
            font-family:Arial;
            mso-generic-font-family:auto;
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
		<div id="Despacho" align=center>
			<table border=0 cellpadding=0 cellspacing=0 width=700 style='border-collapse:collapse;table-layout:fixed;width:526pt'>
				<tr>
					<td colspan=2 class=head style='height:50pt'>
						<img src="{{ public_path('images/SOLMICO.png') }}" style='height:20pt;width:120pt'><br>
						{{ setting('site.rif')}}
					</td>
					<td colspan=5 class=titulo_head style='height:50pt'>HOJA DE RUTA</td>
					<td class=head style='height:50pt'>FGC-XXX <br>
						Ver.0 09/2019
					</td>
				</tr>
				<tr>
					<td colspan=2 class=titulo_campo style='height:13.5pt'>Nº GUÍA</td>
					<td colspan=4 class=titulo_campo>Nº PEDIDO</td>
					<td colspan=2 class=titulo_campo>FECHA</td>
				</tr>
				<tr>
					<td colspan=2 class=campo style='height:25pt; font-size:11.0pt'>{{ $despacho->id }}</td>
					<td colspan=4 class=campo style='font-size:11.0pt'>
                                    @if($proyecto->numcont == NULL)
                                          PEDIDO Nº: {{ $proyecto->pedido }}
                                    @else
                                          CONTRATO Nº: {{ $proyecto->numcont }} - PEDIDO Nº: {{ $proyecto->pedido }}
                                    @endif
                              </td>
					<td colspan=2 class=campo style='font-size:11.0pt'>{{ date('d/m/Y', strtotime($despacho->fechasal)) }}</td>
				</tr>
				<tr>
					<td colspan=6 class=titulo_campo style='height:13.5pt; width:377pt'>CLIENTE</td>
					<td colspan=2 class=titulo_campo style='width:149pt'>RIF</td>
				</tr>
				<tr>
					<td colspan=6 class=campo style='height:25pt'>{{ $cliente->nombre }}</td>
					<td colspan=2 class=campo >{{ $cliente->rif }}</td>
				</tr>
				<tr>
					<td colspan=4 class=titulo_campo style='height:13.5pt; width:227pt'>DESCRIPCIÓN DEL PRODUCTO</td>
					<td colspan=2 class=titulo_campo style='width:80pt'>Nº LOTE</td>
					<td class=titulo_campo style='width:70pt'>UNIDAD</td>
					<td class=titulo_campo style='width:149pt'>CANTIDAD</td>
				</tr>
				<tr>
					<td colspan=4 class=campo style='height:25pt'>{{ $producto->producto }}</td>
					<td colspan=2 class=campo >{{ $lote->lote }}</td>
					<td class=campo >{{ $unidad->unidad }}</td>
					<td class=campo >{{ number_format($despacho->cant_des, '0', ',', '.') }}</td>
				</tr>
				<tr>
					<td colspan=8 class=titulo_campo style='height:13.5pt;width:526pt'>ÁREA DE DESPACHO</td>
				</tr>
				<tr>
					<td colspan=8 class=campo style='height:25pt'>PLANTA INDUSTRIALIZADORA SOLMICO, C.A. (Nº DI/B-111)</td>
				</tr>
				<tr>
					<td colspan=4 class=titulo_campo style='height:13.5pt;width:227pt'>DESPACHADO POR SOLMICO, C.A.</td>
					<td colspan=2 class=titulo_campo style='width:80pt'>CARGO</td>
					<td class=titulo_campo style='width:70pt'>C.I.</td>
					<td class=titulo_campo style='width:149pt'>FIRMA</td>
				</tr>
				<tr>
					<td colspan=4 class=campo style='height:25pt'>{{ $autorizado->nombre }}</td>
					<td colspan=2 class=campo>{{ $autorizado->cargo }}</td>
					<td class=campo>{{ number_format($despacho->cedaut, '0', '', '.') }}</td>
					<td class=campo>&nbsp;</td>
				</tr>
				<tr>
					<td colspan=8 class=titulo_campo style=' height:13.5pt;width:526pt'>ÁREA DE RECEPCIÓN 1</td>
				</tr>
				<tr>
					<td colspan=8 class=campo style='height:25pt'>{{ $despacho->arearec_1 }}</td>
				</tr>
				<tr>
					<td colspan=4 class=titulo_campo style='height:13.5pt'>RECIBIDO POR</td>
					<td colspan=2 class=titulo_campo style='width:80pt'>CARGO</td>
					<td class=titulo_campo style='width:70pt'>C.I.</td>
					<td class=titulo_campo style='width:149pt'>FIRMA</td>
				</tr>
				<tr>
					<td colspan=4 class=campo style='height:25pt'>&nbsp;</td>
					<td colspan=2 class=campo>&nbsp;</td>
					<td class=campo>&nbsp;</td>
					<td class=campo>&nbsp;</td>
				</tr>
				<tr>
					<td colspan=8 class=titulo_campo style=' height:13.5pt;width:526pt'>ÁREA DE RECEPCIÓN 2</td>
				</tr>
				<tr>
					<td colspan=8 class=campo style='height:25pt'>{{ $despacho->arearec_2 }}</td>
				</tr>
				<tr>
					<td colspan=4 class=titulo_campo style='height:13.5pt'>RECIBIDO POR</td>
					<td colspan=2 class=titulo_campo style='width:80pt'>CARGO</td>
					<td class=titulo_campo style='width:70pt'>C.I.</td>
					<td class=titulo_campo style='width:149pt'>FIRMA</td>
				</tr>
				<tr>
					<td colspan=4 class=campo style='height:25pt'>&nbsp;</td>
					<td colspan=2 class=campo>&nbsp;</td>
					<td class=campo>&nbsp;</td>
					<td class=campo>&nbsp;</td>
				</tr>
				<tr>
					<td colspan=8 class=titulo_campo style=' height:13.5pt;width:526pt'>ÁREA DE RECEPCIÓN 3</td>
				</tr>
				<tr>
					<td colspan=8 class=campo style='height:25pt'>{{ $despacho->arearec_3 }}</td>
				</tr>
				<tr>
					<td colspan=4 class=titulo_campo style='height:13.5pt'>RECIBIDO POR</td>
					<td colspan=2 class=titulo_campo style='width:80pt'>CARGO</td>
					<td class=titulo_campo style='width:70pt'>C.I.</td>
					<td class=titulo_campo style='width:149pt'>FIRMA</td>
				</tr>
				<tr>
					<td colspan=4 class=campo style='height:25pt'>&nbsp;</td>
					<td colspan=2 class=campo>&nbsp;</td>
					<td class=campo>&nbsp;</td>
					<td class=campo>&nbsp;</td>
				</tr>
				<tr>
					<td colspan=8 class=titulo_campo style='height:13.5pt;width:526pt'>OBSERVACIONES GENERALES</td>
				</tr>
				<tr>
					<td colspan=8 class=campo style='height:150pt'>{{ $despacho->obs }}</td>
				</tr>
			</table>
		</div>
	</body>

</html>
