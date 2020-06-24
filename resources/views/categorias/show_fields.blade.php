<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $categoria->id }}</p>
</div>

<!-- Categoria Nombre Field -->
<div class="form-group">
    {!! Form::label('categoria_nombre', 'Categoria Nombre:') !!}
    <p>{{ $categoria->categoria_nombre }}</p>
</div>

<!-- Categoria Descripcion Field -->
<div class="form-group">
    {!! Form::label('categoria_descripcion', 'Categoria Descripcion:') !!}
    <p>{{ $categoria->categoria_descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $categoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $categoria->updated_at }}</p>
</div>

