@extends('layouts.app')

@section('template_title')
    Update Jugador
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header m-4">
                        <span class="font-bold text-xl">Editar Jugador</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('jugadors.update', $jugador->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('jugador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
