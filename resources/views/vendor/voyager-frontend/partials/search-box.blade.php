<form id="search-form" action="/search" method="GET">
    <div class="input-group">
        <input class="input-group-field" name="keywords" type="search" value="{{ \Request::get('keywords') }}" placeholder="Estoy buscando..."/>
        <div class="input-group-button">
            <input type="submit" class="button dark" value="Buscar">
        </div>
    </div>
</form>