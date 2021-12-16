<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="perfect-scrollbar-off">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Pipeline Network Sdn. Bhd.">
        <meta name="author" content="Pipeline Network Sdn. Bhd.">
        <title>
            Nuclear: E-Client
        </title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="content-wrapper">
            <div style="background:lightgray;margin-bottom:10px;">
                <a href="{{ url('senarai_pesanan') }}">Senarai Pesanan</a> | 
                <a href="{{ url('senarai_pesanan_lulus') }}">Pesanan Berjadual/Perjanjian</a> | 
                <a href="{{ url('jana_pesanan') }}">Jana Pesanan</a>
            </div>
            @yield('content')
        </div>
        <footer class="footer"></footer>
    </body>
</html>
