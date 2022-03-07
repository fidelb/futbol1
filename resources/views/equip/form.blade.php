<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('equip') }}
            {{ Form::text('equip', $equip->equip, ['class' => 'form-control' . ($errors->has('equip') ? ' is-invalid' : ''), 'placeholder' => 'Equip']) }}
            {!! $errors->first('equip', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>