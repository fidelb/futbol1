@extends('layouts.app')

@section('template_title')
    {{ $jugador->name ?? 'Show Jugador' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header m-4">
                    <span class="font-bold text-xl">Mostrar Jugador</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('jugadors.index') }}"  role="form" enctype="multipart/form-data">
                        
                        @csrf


<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">    
    <div class="table-responsive table-striped">
        <table class="table text-grey-darkest">
            <thead class="bg-grey-dark text-white text-normal">            
            </thead>
            <tbody>            
            <tr>
                <th scope="row">{{ Form::label('nom') }}</th>                            
                <td>{{ $jugador->nom }}</td>                
            </tr>
            <tr>
                <th scope="row">{{ Form::label('equip_id') }}</th>                            
                <td>{{ $jugador->equip->equip }}</td>              
            </tr>           
            </tbody>
            
        </table>
        
        </div>
         
</div>
<div class="py-2 border-b border-light-grey float-right">              
    <a class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full" href="{{ route('jugadors.index') }}"> Tornar</a>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

@endsection
