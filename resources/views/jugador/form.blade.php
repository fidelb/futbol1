<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">    
    <div class="table-responsive table-striped">
        <table class="table text-grey-darkest">
            <thead class="bg-grey-dark text-white text-normal">            
            </thead>
            <tbody>            
            <tr>
                <th scope="row">{{ Form::label('nom') }}</th>                            
                <td>{{ Form::text('nom', $jugador->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}</td>
                {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}                
            </tr>
            <tr>
                <th scope="row">{{ Form::label('equip_id') }}</th>                            
                <td>{{ Form::text('equip_id', $jugador->equip_id, ['class' => 'form-control' . ($errors->has('equip_id') ? ' is-invalid' : ''), 'placeholder' => 'Equip Id']) }}</td>
                {!! $errors->first('equip_id', '<div class="invalid-feedback">:message</div>') !!}                
            </tr>           
            </tbody>
            
        </table>
        </div>
        
</div>
<div class="px-6 py-2 border-b border-light-grey float-right">
    <button type="submit" class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">Desar</button>                   
</div>
