<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_id', 'Item :') !!}
    {!! Form::select('item_id', $items , null, ['class' => 'form-control']) !!}
</div>

<!-- Deposito Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposito_id', 'Deposito :') !!}
    {!! Form::select('deposito_id', $depositos, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stocks.index') }}" class="btn btn-default">Cancelar</a>
</div>
