<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $stock->id }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $stock->cantidad }}</p>
</div>

<!-- Item Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_id', 'Item :') !!}
    <p>{{ $stock->item->item_nombre }}</p>
</div>

<!-- Deposito Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deposito_id', 'Deposito :') !!}
    <p>{{ $stock->deposito->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $stock->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $stock->updated_at }}</p>
</div>

