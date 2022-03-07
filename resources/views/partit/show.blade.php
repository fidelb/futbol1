@extends('layouts.app')

@section('template_title')
    {{ $partit->name ?? 'Show Partit' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Partit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('partits.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Data:</strong>
                            {{ $partit->data }}
                        </div>
                        <div class="form-group">
                            <strong>Equiplocal Id:</strong>
                            {{ $partit->equipLocal_id }}
                        </div>
                        <div class="form-group">
                            <strong>Equipvisitant Id:</strong>
                            {{ $partit->equipVisitant_id }}
                        </div>
                        <div class="form-group">
                            <strong>Golslocal:</strong>
                            {{ $partit->golsLocal }}
                        </div>
                        <div class="form-group">
                            <strong>Golsvisitant:</strong>
                            {{ $partit->golsVisitant }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
