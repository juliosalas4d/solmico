        <footer class="top-footer">
            <div class="grid-container">

            </div> <!-- /.grid-container -->
        </footer>

        <footer class="bottom-footer">
            <div class="grid-container">
                <div class="grid-x grid-padding-y">
                    <div class="cell small-12">
                        <ul class="menu align-center">
                            {{ menu('primary', 'voyager-frontend::partials.menu-left') }}
                        </ul>

                        <p class="copyright text-center">&copy; {{ setting('site.title') }} @php echo date('Y'); @endphp. Todos los derechos reservados.</p>
                    </div> <!-- /.cell -->
                </div> <!-- /.grid -->
            </div> <!-- /.grid-container -->
        </footer>
    </div> <!-- /.off-canvas-content -->

    <!-- Javascript Libs -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/js/app.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/jquery.js"></script>
    <script type="text/javascript" src="{{ url('/') }}/assets/js/bootstrap.js" ></script>

    <!-- Scripts para la Localización: País -> Estado -> Nunicipio -> Parroquia -> Ciudad -->
    <script type="text/javascript">
      // Al seleccionar el Pais, actualiza Estados
      $('#idpais').on('change', function(e){
        console.log(e);
        var pais_id = e.target.value;
        $.get('/json-estados?pais_id=' + pais_id,function(data) {
          console.log(data);
          $('#estados_div').css('display', 'block');

          $('#idestado').empty();
          $('#idestado').append('<option value="" disabled="true" selected="true"> Seleccione Estado </option>');
          //$('#idestado').enabled();

          $('#idmunicipio').empty();
          $('#idmunicipio').append('<option value="" disabled="true" selected="true"> Seleccione Municipio </option>');
          $('#municipios_div').css('display', 'none');

          $('#idparroquia').empty();
          $('#idparroquia').append('<option value="" disabled="true" selected="true"> Seleccione Parroquia </option>');
          $('#parroquias_div').css('display', 'none');

          $('#idciudad').empty();
          $('#idciudad').append('<option value="" disabled="true" selected="true"> Seleccione Ciudad </option>');
          $('#ciudades_div').css('display', 'none');

          $.each(data, function(key, value){
            $('#idestado').append('<option value="'+ value.idestado +'">'+ value.estado +'</option>');
          })
        });
      });

      // Al seleccionar el Estado, actualiza Municipios
      $('#idestado').on('change', function(e){
        console.log(e);
        var estado_id = e.target.value;
        $.get('/json-municipios?estado_id=' + estado_id,function(data) {
          console.log(data);

          $('#municipios_div').css('display', 'block');

          $('#idmunicipio').empty();
          $('#idmunicipio').append('<option value="" disabled="true" selected="true"> Seleccione Municipio </option>');

          $('#idparroquia').empty();
          $('#idparroquia').append('<option value="" disabled="true" selected="true"> Seleccione Parroquia </option>');
          $('#parroquias_div').css('display', 'none');

          $('#idciudad').empty();
          $('#idciudad').append('<option value="" disabled="true" selected="true"> Seleccione Ciudad </option>');
          $('#ciudades_div').css('display', 'none');

          $('#idmunicipio').focus;

          $.each(data, function(key, value){
            $('#idmunicipio').append('<option value="'+ value.idmunicipio +'">'+ value.municipio +'</option>');
          })
        });
      });

      // Al seleccionar el Municipio, actualiza Parriquias y Ciuades
      $('#idmunicipio').on('change', function(e){
        console.log(e);
        var municipio_id = e.target.value;
        $.get('/json-parroquias?municipio_id=' + municipio_id,function(data) {
          console.log(data);

          $('#parroquias_div').css('display', 'block');

          $('#idparroquia').empty();
          $('#idparroquia').append('<option value="" disabled="true" selected="true"> Seleccione Parroquia </option>');

          $.each(data, function(key, value){
            $('#idparroquia').append('<option value="'+ value.idparroquia +'">'+ value.parroquia +'</option>');
          })
        });

        $.get('/json-ciudades?municipio_id=' + municipio_id,function(data) {
          console.log(data);

          $('#ciudades_div').css('display', 'block');

          $('#idciudad').empty();
          $('#idciudad').append('<option value="" disabled="true" selected="true"> Seleccione Ciudad </option>');

          $.each(data, function(key, value){
            $('#idciudad').append('<option value="'+ value.idciudad +'">'+ value.ciudad +'</option>');
          })
        });
      });

    </script>


</body>
</html>
