<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/dashboardStyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Gestor de Equips</h1>
                </div>
                <div class="p-1 flex flex-row items-center ">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">{{ Auth::user()->name }}</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-20 -ml-3 pin-r">
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->
        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">                        
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </li>
                    <li class="w-full h-full px-2">                        
                        <ul class="list-reset -mx-2 bg-white-medium-dark">                            
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href=""
                                   class="mx-4 font-sans font-bold font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                   <x-nav-link :href="route('equips.index')"                                     
                                   :active="request()->routeIs('equips.index')">
                                   {{ __('Equips') }}                                   
                                    </x-nav-link>                                     
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href=""
                                   class="mx-4 font-sans font-bold font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                   <x-nav-link :href="route('partits.index')" :active="request()->routeIs('partits.index')">
                                    {{ __('Partits') }}
                                    </x-nav-link>                                   
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href=""
                                   class="mx-4 font-sans font-bold font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                   <x-nav-link :href="route('jugadors.index')" :active="request()->routeIs('jugadors.index')">
                                    {{ __('Jugadors') }}
                                    </x-nav-link>                                    
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!--/Sidebar-->
    @yield('content')

        </div>
    <!--Footer-->
    <footer class="bg-grey-darkest text-white p-2">
        <div class="flex flex-1 mx-auto">&copy; 2022</div>
    </footer>
    <!--/footer-->
    </div>
</div>

<script>
var sidebar = document.getElementById('sidebar');
function sidebarToggle() {
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
    } else {
        sidebar.style.display = "none";
    }
}
var profileDropdown = document.getElementById('ProfileDropDown');
function profileToggle() {
    if (profileDropdown.style.display === "block") {
        profileDropdown.style.display = "none";
    } else {
        profileDropdown.style.display = "block";
    }
}
</script>
</body>
</html>