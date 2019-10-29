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
    <style id="Rep_Tec">
      @page {
            margin: 2cm 2cm 2cm 3cm !important;
            padding: 0px 0px 0px 0px !important;
        }
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
            border-style: solid;
            border-width: .5pt;
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
            font-size:16.0pt;
            font-weight:700;
            font-style:bold;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:middle;
            border:.5pt solid;
            mso-background-source:auto;
            mso-pattern:auto;
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
        .seccion
          {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:left;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
        .contenido
          {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:11.0pt;
            font-weight:400;
            font-style:normal;
            text-decoration:none;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:justify;
            vertical-align:top;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:normal;}
        .titulo
          {padding-top:1px;
            padding-right:1px;
            padding-left:1px;
            mso-ignore:padding;
            color:black;
            font-size:14.0pt;
            font-weight:700;
            font-style:normal;
            text-decoration:underline;
            text-underline-style:single;
            font-family:Arial, sans-serif;
            mso-font-charset:0;
            mso-number-format:General;
            text-align:center;
            vertical-align:bottom;
            mso-background-source:auto;
            mso-pattern:auto;
            white-space:nowrap;}
      -->
    </style>
  </head>

  <body>
    <div align=center>
      <table border=0 cellpadding=0 cellspacing=0 width=608 style='border-collapse:collapse;table-layout:fixed;width:456pt'>
        <tr>
          <td class=head style='height:50.0pt'>
            <img src="{{ public_path('images/SOLMICO.png') }}" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" style='width:100.0pt;height:15.0pt'><br>
            {{ setting('site.rif')}}
          </td>
          <td colspan=2 class=titulo_head>BOLETÍN TÉCNICO DE PRODUCTOS</td>
          <td class=head>FGC-xxx <br>
            Ver.0 10/2019
          </td>
        </tr>
        <tr>
          <td style='height:10pt'></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan=4 class=titulo style='height:18.0pt'>{{ $producto->producto }}</td>
        </tr>
        <tr>
          <td style='height:10pt;width:114pt'></td>
        </tr>
        <tr>
          <td colspan=4 class=seccion style='height:15.0pt'>DESCRIPCIÓN GENERAL</td>
        </tr>
        <tr>
          <td colspan=4 class=contenido style='height:auto; width:456pt'>{{ $producto->descri }}</font>
          </td>
        </tr>
        <tr>
          <td style='height:10pt;width:114pt'></td>
        </tr>
        <tr>
          <td colspan=4 class=seccion style='height:15.0pt'>USOS Y DOSIFICACIONES</td>
        </tr>
        <tr>
          <td colspan=4 class=contenido style='height:auto; width:456pt'>{{ $producto->uso }}</td>
        </tr>
        <tr>
          <td style='height:10pt;width:114pt'></td>
        </tr>
        <tr>
          <td colspan=4 class=seccion style='height:15.0pt'>CARACTERÍSTICAS FÍSICO-QUÍMICAS</td>
        </tr>
        <tr>
          <td style='height:14.25pt'></td>
          <td class=campo>{{ $param1->parametro }}
            @if($param1->siglas != NULL)
              <br>({{ $param1->siglas }})</td>)
            @endif
          </td>
          <td class=campo style='width:150pt'>
            @if($param1->min == $param1->max)
              {{ $param1->min }}
            @else
              {{ $param1->min }} - {{ $param1->max }}
            @endif
          </td>
          <td></td>
        </tr>
        <tr>
          <td style='height:14.25pt'></td>
          <td class=campo>{{ $param2->parametro }}
            @if($param2->siglas != NULL)
              <br>({{ $param2->siglas }})</td>)
            @endif
          </td>
          <td class=campo style='width:150pt'>
            @if($param2->min == $param2->max)
              {{ $param2->min }}
            @else
              {{ $param2->min }} - {{ $param2->max }}
            @endif
          </td>
          <td></td>
        </tr>
        <tr>
          <td style='height:14.25pt'></td>
          <td class=campo>{{ $param3->parametro }}
            @if($param3->siglas != NULL)
              <br>({{ $param3->siglas }})</td>)
            @endif
          </td>
          <td class=campo style='width:150pt'>
            @if($param3->min == $param3->max)
              {{ $param3->min }}
            @else
              {{$param3->min }} - {{ $param3->max }}
            @endif
          </td>
          <td></td>
        </tr>
        <tr>
          <td style='height:14.25pt'></td>
          <td class=campo >{{ $param4->parametro }}
            @if($param4->siglas != NULL)
              <br>({{ $param4->siglas }})</td>)
            @endif
          </td>
          <td class=campo style='width:150pt'>
            @if($param4->min == $param4->max)
              {{ $param4->min }}
            @else
              {{ $param4->min }} - {{ $param4->max }}
            @endif
          </td>
          <td></td>
        </tr>
        <tr>
          <td style='height:14.25pt'></td>
          <td class=campo >{{ $param5->parametro }} 
            @if($param5->siglas != NULL)
              <br>({{ $param5->siglas }})</td>)
            @endif
          <td class=campo style='width:150pt'>
            @if($param5->min == $param5->max)
              {{ $param5->min }}
            @else
              {{  $param5->min }} - {{ $param5->max }}
            @endif
          </td>
          <td></td>
        </tr>
        <tr>
          <td style='height:10pt'></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td colspan=4 class=seccion style='height:15.0pt'>PRECAUCIÓN Y MANEJO</td>
        </tr>
        <tr>
          <td colspan=4 class=contenido style='height:auto; width:456pt'>{{ $producto->medseg }}</td>
        </tr>
      </table>
    </div>
  </body>

</html>
