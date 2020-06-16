<table class="table table-responsive" id="almacens-table">
    <thead>
        <tr>
            <th>Producto</th>
        <th>Materiaprima</th>
        <th>Patrimonio</th>
        <th>Desc</th>
        <th>Actual</th>
        <th>Minimo</th>
        <th>Categoria Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($almacens as $almacen)
        <tr>
            <td>{!! $almacen->producto !!}</td>
            <td>{!! $almacen->materiaprima !!}</td>
            <td>{!! $almacen->patrimonio !!}</td>
            <td>{!! $almacen->desc !!}</td>
            <td>{!! $almacen->actual !!}</td>
            <td>{!! $almacen->minimo !!}</td>
            <td>{!! $almacen->categoria->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['almacens.destroy', $almacen->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('almacens.show', [$almacen->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('almacens.edit', [$almacen->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>