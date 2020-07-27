<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Origen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_origen', 'Origen:') !!}
    {!! Form::select('id_origen', $depositos, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_destino', 'Destino:') !!}
    {!! Form::select('id_destino',$depositos, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('item_id', 'Item:') !!}
    {!! Form::select('item_id',$items, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transferencias.index') }}" class="btn btn-default">Cancelar</a>
</div>
