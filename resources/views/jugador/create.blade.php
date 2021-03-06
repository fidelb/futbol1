@extends('layouts.app')

@section('template_title')
    Create Jugador
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header m-4">
                        <span class="font-bold text-xl">Crear Jugador</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('jugadors.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('jugador.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
