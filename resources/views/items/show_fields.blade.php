<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $item->id }}</p>
</div>

<!-- Item Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_nombre', 'Item Nombre:') !!}
    <p>{{ $item->item_nombre }}</p>
</div>

<!-- Item Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_descripcion', 'Item Descripcion:') !!}
    <p>{{ $item->item_descripcion }}</p>
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria:') !!}
    <p>{{ $item->categoria->categoria_nombre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $item->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $item->updated_at }}</p>
</div>

