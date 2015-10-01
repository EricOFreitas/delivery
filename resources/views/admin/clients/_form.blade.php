<div class="form-group">
    {!! Form::label('Client', 'Cliente:') !!}
    {!! Form::select('user_id', $clients, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Phone', 'Telefone:') !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Address', 'Endereço:') !!}
    {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('City', 'Cidade:') !!}
    {!! Form::text('city', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('State', 'Estado:') !!}
    {!! Form::textarea('state', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Zipcode', 'CEP:') !!}
    {!! Form::text('zipcode', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
</div>