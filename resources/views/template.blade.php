<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Sistema de Ventas" />
        <meta name="author" content="Rixler" />
        <title>Sistema de Ventas - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{asset('css/template.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!--TODO:  stack('css') sirve para poner css personalizados para las páginas que se heredan -->
        @stack('css')
    </head>
    <body class="sb-nav-fixed">
        
        <!--TODO: componente navigation-header establecido en el directorio components -->
        <x-navigation-header/>

        <div id="layoutSidenav">
            
            <!-- TODO: componente navigation-menu establecido en el directorio components -->
            <x-navigation-menu/>

            <div id="layoutSidenav_content">
                
                <main>
                    @yield('content')    
                </main>
               
                <!-- TODO: componente footer establecido en el directorio components -->
                <x-footer/>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <!--TODO:  stack('js') sirve para poner js personalizados para las páginas que se heredan -->
        @stack('js')
    </body>
</html>
