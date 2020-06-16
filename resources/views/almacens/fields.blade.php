<!-- Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto', 'Producto:') !!}
    {!! Form::text('producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Materiaprima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materiaprima', 'Materia Prima:') !!}
    {!! Form::text('materiaprima', null, ['class' => 'form-control']) !!}
</div>

<!-- Patrimonio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patrimonio', 'Patrimonio:') !!}
    {!! Form::number('patrimonio', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Descripcion:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Actual Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actual', 'Actual:') !!}
    {!! Form::number('actual', null, ['class' => 'form-control']) !!}
</div>

<!-- Minimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minimo', 'Minimo:') !!}
    {!! Form::number('minimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Categoria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categoria_id', 'Seleccione una Categoria :') !!}
    {!! Form::select('categoria_id', $categorias , null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('almacens.index') !!}" class="btn btn-default">Cancelar</a>
</div>
