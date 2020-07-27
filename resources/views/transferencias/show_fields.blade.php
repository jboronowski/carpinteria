<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $transferencia->cantidad }}</p>
</div>

<!-- Id Origen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_origen', ' Origen:') !!}
    <p>{{ $transferencia->deposito->descripcion }}</p>
</div>

<!-- Id Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_destino', ' Destino:') !!}
    <p>{{ $transferencia->deposito1->descripcion }}</p>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('item_id', 'Item:') !!}
    <p>{{ $transferencia->item->item_nombre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $transferencia->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $transferencia->updated_at }}</p>
</div>
