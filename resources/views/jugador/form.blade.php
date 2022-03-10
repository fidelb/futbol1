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
                <td>
                    @php
                        use App\Models\Equip;
                        $equips = Equip::all();   
                    @endphp 
                    <select name="equip_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach($equips as $equip)
                        <option value="{{$equip->id}}" class="text-xl font-bold p-1" {{ $equip->id==$jugador->equip_id ? 'selected' : '' }}>{{$equip->equip}}</option>  
                        @endforeach                      
                    </select> 
                    {!! $errors->first('equip_id', '<div class="invalid-feedback">:message</div>') !!}                
            </tr>           
            </tbody>
            
        </table>
        </div>
        
</div>
<div class="px-6 py-2 border-b border-light-grey float-right">
    <button type="submit" class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">Desar</button>                   
</div>
