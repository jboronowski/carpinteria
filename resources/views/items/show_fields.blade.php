<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $item->id }}</p>
</div>

<!-- Item Nombre Field -->
<div class="form-group">
    {!! Form::label('item_nombre', 'Item Nombre:') !!}
    <p>{{ $item->item_nombre }}</p>
</div>

<!-- Item Descripcion Field -->
<div class="form-group">
    {!! Form::label('item_descripcion', 'Item Descripcion:') !!}
    <p>{{ $item->item_descripcion }}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    <p>{{ $item->categoria_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $item->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $item->updated_at }}</p>
</div>

