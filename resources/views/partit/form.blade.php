<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('data') }}
            {{ Form::text('data', $partit->data, ['class' => 'form-control' . ($errors->has('data') ? ' is-invalid' : ''), 'placeholder' => 'Data']) }}
            {!! $errors->first('data', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('equipLocal_id') }}
            {{ Form::text('equipLocal_id', $partit->equipLocal_id, ['class' => 'form-control' . ($errors->has('equipLocal_id') ? ' is-invalid' : ''), 'placeholder' => 'Equiplocal Id']) }}
            {!! $errors->first('equipLocal_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('equipVisitant_id') }}
            {{ Form::text('equipVisitant_id', $partit->equipVisitant_id, ['class' => 'form-control' . ($errors->has('equipVisitant_id') ? ' is-invalid' : ''), 'placeholder' => 'Equipvisitant Id']) }}
            {!! $errors->first('equipVisitant_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('golsLocal') }}
            {{ Form::text('golsLocal', $partit->golsLocal, ['class' => 'form-control' . ($errors->has('golsLocal') ? ' is-invalid' : ''), 'placeholder' => 'Golslocal']) }}
            {!! $errors->first('golsLocal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('golsVisitant') }}
            {{ Form::text('golsVisitant', $partit->golsVisitant, ['class' => 'form-control' . ($errors->has('golsVisitant') ? ' is-invalid' : ''), 'placeholder' => 'Golsvisitant']) }}
            {!! $errors->first('golsVisitant', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>