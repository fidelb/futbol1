<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- SEO Meta Tags -->
        <meta name="description" content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
        <meta name="author" content="Your name" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Gestor de Equips</title>

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link href="css/fontawesome-all.css" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link href="css/swiper.css" rel="stylesheet" />
        <link href="css/magnific-popup.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Favicon  -->
        <link rel="icon" href="../images/favicon.png" />
        
        <script>
            function mostrar_ocultar(element) {
            //alert(element);
            var x = document.getElementById(element);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            }
        </script>
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar fixed-top">             
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <h5 class="mb-4 lg:max-w-3xl lg:mx-auto">
                        @auth                        
                        <a href="{{ url('/dashboard') }}" class="text-indigo-600 hover:text-gray-500">Dashboard</a> 
                    @else
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-gray-500">Log in</a>
                        @if (Route::has('register'))
                            &nbsp;<a href="{{ route('register') }}" class="text-indigo-600 hover:text-gray-500">Register</a>
                        @endif
                    @endauth
                    </h5>
                </div>
            @endif        
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

        <!-- Header -->
        <header id="header" class="header py-14 text-center md:pt-16 lg:text-left xl:pt-16 xl:pb-16">
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Introduction -->
        <div class="pt-4 pb-1 text-center">
            <div class="container px-4 sm:px-8 xl:px-4">
                <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">Equips, Partits i Jugadors.</p>
            </div> <!-- end of container -->
        </div>
        <!-- end of introduction -->

        @php
        use App\Models\Equip;
        $equips = Equip::paginate();
        @endphp
        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container px-4 sm:px-8 xl:px-4">

                @foreach ($equips as $equip)
                <!-- Card -->
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $equip->equip }}</h5>

                        <button 
                            onclick="mostrar_ocultar('Partits{{ $equip->id }}')" 
                            type="submit"
                            class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                        >
                            Veure partits
                        </button>

                        <section class="antialiased bg-gray-100 text-gray-600 py-4">
                            <div class="flex flex-col justify-center h-full" style="display:none" id="Partits{{ $equip->id }}">
                                <!-- Table -->
                                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                                    <header class="px-5 py-4 border-b border-gray-100">
                                        <h2 class="font-semibold text-gray-800">Partits</h2>
                                    </header>
                                    <div class="p-2">
                                        <div class="overflow-x-auto">
                                            <table class="table-auto w-full">
                                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                                    <tr>                                                        
                                                        <th class="p-2 whitespace-nowrap">
                                                            <div class="font-semibold text-right">Local</div>
                                                        </th>
                                                        <th class="p-2 whitespace-nowrap">
                                                            <div class="font-semibold text-left">Visitant</div>
                                                        </th>                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="text-sm divide-y divide-gray-100">
                                                    @foreach ($equip->partitsJugats() as $partit)
                                                    <tr>
                                                        
                                                        <td class="p-2 whitespace-nowrap">
                                                            <div class="text-right font-bold text-green-600">{{ $partit->equipLocal->equip }} {{ $partit->golsLocal }}</div>
                                                        </td>
                                                        <td class="p-2 whitespace-nowrap">
                                                            <div class="text-left font-bold text-green-600">{{ $partit->golsVisitant }} {{ $partit->equipVisitant->equip }}</div>
                                                        </td>                                                        
                                                    </tr>
                                                    @endforeach                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        
                        <button 
                            onclick="mostrar_ocultar('Jugadors{{ $equip->id }}')" 
                            type="submit"
                            class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600"
                        >
                            Veure jugadors
                        </button>
                        <section class="antialiased bg-gray-100 text-gray-600 py-4">
                            <div id="Jugadors{{ $equip->id }}" class="flex flex-col justify-center h-full" style="display:none">
                                <!-- Table -->
                                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                                    <header class="px-5 py-4 border-b border-gray-100">
                                        <h2 class="font-semibold text-gray-800">Jugadors</h2>
                                    </header>
                                    <div class="p-2">
                                        <div class="overflow-x-auto">
                                            <table class="table-auto w-full">
                                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                                    <tr>                                                        
                                                        <th class="p-2 whitespace-nowrap">
                                                            <div class="font-semibold text-left">Nom</div>
                                                        </th>                                                                                                              
                                                    </tr>
                                                </thead>
                                                <tbody class="text-sm divide-y divide-gray-100">
                                                    @foreach ($equip->jugadors as $jugador)
                                                    <tr>
                                                        
                                                        <td class="p-2 whitespace-nowrap">
                                                            <div class="text-left font-bold text-green-600">{{ $jugador->nom }}</div>
                                                        </td>                                                                                                              
                                                    </tr>
                                                    @endforeach                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>                    
                </div>
                <!-- end of card -->
                @endforeach

            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->




        <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                <h4 class="mb-4 lg:max-w-3xl lg:mx-auto">Pràctica per a <a class="text-indigo-600 hover:text-gray-500" href="https://www.barcelonactiva.cat/es/itacademy" target="_blank">ITAcademy</a></h4>
                <p class="pb-2 p-small statement">Copyright © <a href="https://github.com/fidelb" target="_blank" class="no-underline">Fidel</a></p> 
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


    


        <!-- Scripts -->
        <script src="js/jquery.min.js"></script> <!-- jQuery for JavaScript plugins -->
        <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>
