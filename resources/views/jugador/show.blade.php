@extends('layouts.app')

@section('template_title')
    {{ $jugador->name ?? 'Show Jugador' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Jugador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jugadors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $jugador->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Equip Id:</strong>
                            {{ $jugador->equip_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
