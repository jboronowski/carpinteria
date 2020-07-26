<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $transferencia->cantidad }}</p>
</div>

<!-- Id Origen Field -->
<div class="form-group">
    {!! Form::label('id_origen', 'Id Origen:') !!}
    <p>{{ $transferencia->deposito->descripcion }}</p>
</div>

<!-- Id Destino Field -->
<div class="form-group">
    {!! Form::label('id_destino', 'Id Destino:') !!}
    <p>{{ $transferencia->deposito1->descripcion }}</p>
</div>

<div class="form-group">
    {!! Form::label('item_id', 'Item:') !!}
    <p>{{ $transferencia->item->item_nombre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $transferencia->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $transferencia->updated_at }}</p>
</div>
