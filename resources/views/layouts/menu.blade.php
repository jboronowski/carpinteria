<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">

    <a href="{{ route('items.index') }}"><i class="fa fa-archive"></i><span>Items</span></a>

</li>

<li class="{{ Request::is('depositos*') ? 'active' : '' }}">

    <a href="{{ route('depositos.index') }}"><i class="fa fa-clone"></i><span>Depositos</span></a>
</li>


<li class="{{ Request::is('stocks*') ? 'active' : '' }}">
    <a href="{{ route('stocks.index') }}"><i class="fa fa-book"></i></i><span>Stock</span></a>
</li>
<li class=>
   <a href="{{ action('AuditController@index') }}"><i class="fa fa-address-card"></i></i><span>Auditoria</span></a>

</li>
<li class="{{ Request::is('transferencias*') ? 'active' : '' }}">
    <a href="{{ route('transferencias.index') }}"><i class="fa fa-edit"></i><span>Transferencias</span></a>
</li>

