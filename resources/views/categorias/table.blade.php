<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready( function () {
    $('#123').DataTable({
         
          
        });
     });
  </script>
<div class="table-responsive">

    <table class="table 123" id="123">
        <thead>
            <tr>
                <th>Categoria Nombre</th>
        <th>Categoria Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->categoria_nombre }}</td>
            <td>{{ $categoria->categoria_descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorias.show', [$categoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categorias.edit', [$categoria->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categorias->links() }}

</div>
