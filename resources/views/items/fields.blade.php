<!-- Item Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_nombre', 'Item Nombre:') !!}
    {!! Form::text('item_nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Item Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('item_descripcion', 'Item Descripcion:') !!}
    {!! Form::text('item_descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Categoria Id:') !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-default">Cancel</a>
</div>
