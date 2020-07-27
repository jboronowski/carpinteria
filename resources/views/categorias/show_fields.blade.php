<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $categoria->id }}</p>
</div>

<!-- Categoria Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_nombre', 'Categoria Nombre:') !!}
    <p>{{ $categoria->categoria_nombre }}</p>
</div>

<!-- Categoria Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_descripcion', 'Categoria Descripcion:') !!}
    <p>{{ $categoria->categoria_descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $categoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $categoria->updated_at }}</p>
</div>

