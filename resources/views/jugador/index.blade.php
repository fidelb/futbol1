@extends('layouts.app')

@section('template_title')
    Jugador
@endsection

@section('content')
<!--Main-->
<main class="bg-white-300 flex-1 p-3 overflow-hidden">
    <div class="flex flex-col">
        
        <!-- Card Sextion Starts Here -->
        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
            <!-- card -->
            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                <div class="px-6 py-2 border-b border-light-grey">
                    <div class="font-bold text-xl">{{ __('Jugador') }}
                        <a href="{{ route('jugadors.create') }}" class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full float-right">
                            + {{ __('Create New') }}
                        </a>
                    </div>                    
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <div class="table-responsive table-striped">
                    <table class="table text-grey-darkest">
                        <thead class="bg-grey-dark text-white text-normal">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Equip</th>
                            <th scope="col"></th>                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($jugadors as $jugador)
                        <tr>
                            <th scope="row">{{ $jugador->nom }}</th>                            
                            <td>{{ $jugador->equip->equip }}</td>
                            <td>
                                <form action="{{ route('jugadors.destroy',$jugador->id) }}" method="POST">
                                    <a class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full" href="{{ route('jugadors.show',$jugador->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                    <a class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full" href="{{ route('jugadors.edit',$jugador->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-800 text-white font-light py-1 px-2 rounded-full"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                </form>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /card -->
        </div>
        <!-- /Cards Section Ends Here -->
        
    </div>
</main>
<!--/Main-->

@endsection
