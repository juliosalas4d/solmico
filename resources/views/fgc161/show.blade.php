<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/msoexcel.css" />
    </head>

    <body>
        <div id="Despacho" align=center x:publishsource="Excel">
            <table border=0 cellpadding=0 cellspacing=0 width=855 style='border-collapse:collapse;table-layout:fixed;width:644pt'>
                <tr>
                    <td colspan=2 height=31 class=head width=10 style='height:50pt;width:120'>
                        <img src="/images/SOLMICO.png" style='height:20pt;width:120'><br>
                        {{ setting('site.rif')}}
                    </td>
                    <td colspan=6 height=31 class=head width=835 style='height:50pt;width:404'>{{ setting('site.dir_empresa')}} <br>
                        Teléfonos: {{ setting('site.tel') }} <br>
                        Email: {{ setting('site.email') }}
                    </td>
                    <td colspan=2 height=31 class=head width=10 style='height:50pt;width:120'>FGC-161 <br>
                        Ver.1
                    </td>
                </tr>
                <tr>
                    <td colspan=10 height=31 class=titulo width=855 style='height:23.25pt;width:644pt'>GUÍA DE DESPACHO DE PRODUCTOS QUÍMICOS
                  </td>
                </tr>
              <tr height=17 style='height:12.75pt'>
                  <td colspan=3 height=17 class=titulo_campo width=232 style='height:12.75pt;width:175pt'>Nº GUÍA</td>
                  <td colspan=5 class=titulo_campo width=445 style='border-left:none;width:335pt'>Nº PEDIDO</td>
                  <td colspan=2 class=titulo_campo width=178 style='border-left:none;width:134pt'>FECHA</td>
              </tr>
              <tr height=29 style='mso-height-source:userset;height:21.75pt'>
                  <td colspan=3 height=29 class=campo_guia width=232 style='height:21.75pt;width:175pt'>{{ $despacho->iddesp }}</td>
                  <td colspan=5 class=campo width=445 style='border-left:none;width:335pt'>CONTRATO Nº: {{ $proyecto->numcont }} - PEDIDO Nº: {{ $proyecto->pedido }}</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>{{ $despacho->fechasal }}</td>
              </tr>
              <tr class=campo height=17 style='height:12.75pt'>
                  <td colspan=8 height=17 class=titulo_campo width=677 style='height:12.75pt;width:510pt'>CLIENTE</td>
                  <td colspan=2 class=titulo_campo width=178 style='border-left:none;width:134pt'>RIF</td>
              </tr>
              <tr class=campo height=26 style='mso-height-source:userset;height:20.1pt'>
                  <td colspan=8 height=26 class=xl8918654 width=677 style='height:20.1pt;width:510pt'>{{ $cliente->nombre }}</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>{{ $cliente->rif }}</td>
              </tr>
              <tr height=17 style='height:12.75pt'>
                  <td colspan=10 height=17 class=titulo_campo width=855 style='height:12.75pt;width:644pt'>ÁREA DE DESPACHO</td>
              </tr>
              <tr height=26 style='mso-height-source:userset;height:20.1pt'>
                  <td colspan=10 height=26 class=campo width=855 style='height:20.1pt;width:644pt'>PLANTA INDUSTRIALIZADORA SOLMICO, C.A. (Nº DI/B-111)</td>
              </tr>
              <tr class=campo height=17 style='mso-height-source:userset;height:12.75pt'>
                  <td colspan=5 height=17 class=titulo_campo width=410 style='height:12.75pt;width:309pt'>DESCRIPCIÓN DEL PRODUCTO<span style='mso-spacerun:yes'> </span></td>
                  <td colspan=2 class=titulo_campo width=178 style='border-left:none;width:134pt'>Nº LOTE</td>
                  <td class=titulo_campo width=89 style='border-top:none;border-left:none;width:67pt'>UNIDAD</td>
                  <td colspan=2 class=titulo_campo width=178 style='border-left:none;width:134pt'>DESPACHADO</td>
              </tr>
              <tr class=campo height=26 style='mso-height-source:userset;height:20.1pt'>
                  <td colspan=5 height=26 class=campo width=410 style='height:20.1pt;width:309pt'>{{ $producto->producto }}</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>{{ $lote->lote }}</td>
                  <td class=campo width=89 style='border-top:none;border-left:none;width:67pt'>{{ $unidad->unidad }}</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>{{ number_format($despacho->cant_des, '0', ',', '.') }}</td>
              </tr>
              <tr height=17 style='height:12.75pt'>
                  <td colspan=2 height=17 class=titulo_campo width=143 style='height:12.75pt;width:108pt'>PLACAS</td>
                  <td colspan=2 class=titulo_campo width=178 style='border-left:none;width:134pt'>TIPO</td>
                  <td colspan=6 class=titulo_campo width=534 style='border-left:none;width:402pt'>DESCRIPCIÓN DE LA UNIDAD</td>
              </tr>
              <tr class=xl6718654 height=47 style='mso-height-source:userset;height:35.25pt'>
                  <td colspan=2 height=47 class=campo width=143 style='height:35.25pt;width:108pt'>
                    @if($despacho->placare != NULL)
                        {{ $despacho->placach }} / {{ $despacho->placare }}
                    @else
                        {{ $despacho->placach }}
                    @endif
                </td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>
                    @if($tipore != NULL)
                        {{ $tipoch->tipotra }} / {{ $tipore }}
                    @else
                        {{ $tipoch->tipotra }}
                    @endif
                </td>
                  <td colspan=6 class=campo width=534 style='border-left:none;width:402pt'>
                    @if($modelore != NULL)
                        {{ $chuto->modelo }} / {{ $modelore }}
                    @else
                        {{ $chuto->modelo }}
                    @endif
                </td>
              </tr>
              <tr class=xl6818654 height=17 style='mso-height-source:userset;height:12.75pt'>
                  <td colspan=2 height=17 class=titulo_campo width=143 style='height:12.75pt;width:108pt'>C.I. COFER</td>
                  <td colspan=6 class=titulo_campo width=534 style='border-left:none;width:402pt'>NOMBRE DEL CONDUCTOR</td>
                  <td colspan=2 class=titulo_campo width=178 style='border-left:none;width:134pt'>FIRMA</td>
              </tr>
              <tr class=xl6718654 height=26 style='mso-height-source:userset;height:20.1pt'>
                  <td colspan=2 height=26 class=campo width=143 style='height:20.1pt;width:108pt'>{{ number_format($despacho->cedcho, '0', '', '.') }}</td>
                  <td colspan=6 class=campo width=534 style='border-left:none;width:402pt'>{{ $chofer->nombre }}</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
              </tr>
              <tr class=campo height=17 style='height:12.75pt'>
                  <td colspan=10 height=17 class=titulo_campo width=855 style='height:12.75pt;width:644pt'>SITIO DE ENTREGA</td>
              </tr>
              <tr class=campo height=26 style='mso-height-source:userset;height:20.1pt'>
                  <td colspan=10 height=26 class=campo width=855 style='height:20.1pt;width:644pt'>
                    @if($despacho->arearec_3 != NULL)
                        {{ $despacho->arearec_1 }} / {{ $despacho->arearec_2 }} / {{ $despacho->arearec_3 }}
                    @elseif($despacho->arearec_2 != NULL)
                        {{ $despacho->arearec_1 }} / {{ $despacho->arearec_2 }}

                    @else
                        {{ $despacho->arearec_1 }}

                    @endif
                  </td>
              </tr>
              <tr class=campo height=17 style='height:12.75pt'>
                  <td colspan=10 height=17 class=titulo_campo width=855 style='height:12.75pt;width:644pt'>CANTIDADES ENTREGADAS</td>
              </tr>
              <tr class=campo height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 rowspan=2 height=50 class=titulo_campo width=143 style='height:37.7pt;width:108pt'>TANQUES</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
              </tr>
              <tr class=xl7218654 height=17 style='mso-height-source:userset;height:12.75pt'>
                  <td height=17 class=niveles width=89 style='height:12.75pt;border-top:none; border-left:none;width:67pt'>NIVEL INICIAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL FINAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL INICIAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL FINAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL INICIAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL FINAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL INICIAL</td>
                  <td class=niveles width=89 style='border-top:none;border-left:none;width:67pt'>NIVEL FINAL</td>
              </tr>
              <tr class=campo height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 height=33 class=tanque width=143 style='height:24.95pt;width:108pt'>CINTA INGRESADA:</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
              </tr>
              <tr class=campo height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 height=33 class=tanque width=143 style='height:24.95pt;width:108pt'>CINTA MOJADA:</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
              </tr>
              <tr class=campo height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 height=33 class=tanque width=143 style='height:24.95pt;width:108pt'>NIVEL:</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
              </tr>
              <tr class=campo height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 height=33 class=tanque width=143 style='height:24.95pt;width:108pt'>VOLUMEN:</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
                  <td class=campo_tanque width=89 style='border-top:none;border-left:none;width:67pt'>&nbsp;</td>
              </tr>
              <tr class=xl6718654 height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 height=33 class=tanque width=143 style='height:24.95pt;width:108pt'>ENTREGADO POR TANQUE:</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
                  <td colspan=2 class=campo width=178 style='border-left:none;width:134pt'>&nbsp;</td>
              </tr>
              <tr class=tanque height=33 style='mso-height-source:userset;height:24.95pt'>
                  <td colspan=2 height=33 class=total_tanque width=143 style='height:24.95pt;width:108pt'>TOTAL ENTREGADO:</td>
                  <td colspan=8 class=campo width=712 style='border-left:none;width:536pt'>&nbsp;</td>
              </tr>
              <tr height=17 style='height:12.75pt'>
                  <td colspan=10 height=17 class=titulo_campo width=855 style='height:12.75pt;width:644pt'>OBSERVACIONES GENERALES</td>
              </tr>
              <tr height=360 style='mso-height-source:userset;height:270.0pt'>
                  <td colspan=10 height=360 class=tanque width=855 style='height:270.0pt;width:644pt'>{{ $despacho->obs }}</td>
              </tr>
              <tr height=18 style='mso-height-source:userset;height:13.5pt'>
                  <td colspan=5 height=18 class=titulo_campo width=410 style='border-right:.5pt solid black; height:13.5pt;width:309pt'>DESPACHADO POR</td>
                  <td colspan=5 class=titulo_campo width=445 style='border-right:.5pt solid black;width:335pt'>RECIBIDO POR</td>
              </tr>
              <tr height=17 style='mso-height-source:userset;height:12.75pt'>
                  <td height=17 class=titulo_despa width=77 style='height:12.75pt;width:58pt'>NOMBRE:</td>
                  <td colspan=4 class=campo_despa width=333 style='border-right:.5pt solid black;width:251pt'>{{ $autorizado->nombre }} </td>
                  <td class=titulo_despa width=89 style='border-left:none;width:67pt'>NOMBRE:</td>
                  <td colspan=4 class=campo_despa width=356 style='border-right:.5pt solid black;width:268pt'></td>
              </tr>
              <tr height=17 style='height:12.75pt'>
                  <td height=17 class=titulo_despa width=77 style='height:12.75pt;width:58pt'>CARGO:</td>
                  <td colspan=4 class=campo_despa width=333 style='border-right:.5pt solid black;width:251pt'>{{ $autorizado->cargo }} </td>
                  <td class=titulo_despa width=89 style='border-left:none;width:67pt'>CARGO:</td>
                  <td colspan=4 class=campo_despa width=356 style='border-right:.5pt solid black;width:268pt'></td>
              </tr>
              <tr height=17 style='height:12.75pt'>
                  <td height=17 class=titulo_despa width=77 style='height:12.75pt;width:58pt'>C.I.:</td>
                  <td colspan=4 class=campo_despa width=333 style='border-right:.5pt solid black;width:251pt'>{{ number_format($despacho->cedaut, '0', '', '.') }}</td>
                  <td class=titulo_despa width=89 style='border-left:none;width:67pt'>C.I.:</td>
                  <td colspan=4 class=campo_despa width=356 style='border-right:.5pt solid black;width:268pt'></td>
              </tr>
              <tr class=xl7018654 height=51 style='mso-height-source:userset;height:38.25pt'>
                  <td height=51 class=firma width=77 style='height:38.25pt;width:58pt'>FIRMA:</td>
                  <td colspan=4 class=campo_firma width=333 style='border-right:.5pt solid black;width:251pt'>&nbsp;</td>
                  <td class=firma width=89 style='border-left:none;width:67pt'>FIRMA:</td>
                  <td colspan=4 class=campo_firma width=356 style='border-right:.5pt solid black;width:268pt'>&nbsp;</td>
              </tr>

          </table>
      </div>
  </body>

  </html>