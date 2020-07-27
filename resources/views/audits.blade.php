@extends('layouts.app')

    @section('content')
  
    <div class="content">
      <section class="content-header">
        <h1>
            Auditoria
        </h1>
    </section>
       <section class="content-header">
        <h1 class="pull-left">Auditoria</h1>
       
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
        <div class="container-fluid">
        <div class="animated fadeIn">
        <div class="container">
        <div class="table-responsive-sm">
        <table class="table table-striped" id="data-table">
        <div class="card">
        <div class="row">
           <div class="col-lg-12">
             <div class="card-header">
                <i class="fa fa-align-justify"></i>
                  Auditoria
          <thead >
            <tr>
              
              <th>Accion</th>
              <th>Usuario</th>
              <th>Hora</th>
              <th>Valor Anterior</th>
              <th>Nuevo Valor</th>
            </tr>
          </thead>
          <tbody>
            @foreach($audits as $audit)
              <tr>
                
                <td>{{ $audit->event }}</td>
                <td>{{ $audit->user->name }}</td>
                <td>{{ $audit->created_at }}</td>
                <td>
                  <table class="table table-striped" id="data-table">
                    @foreach($audit->old_values as $attribute => $value)
                      <tr>
                        <td><b>{{ $attribute }}</b></td>
                        <td>{{ $value }}</td>
                      </tr>
                    @endforeach
                  </table>
                </td>
                <td>
                  <table class="table table-striped" id="data-table">
                    @foreach($audit->new_values as $attribute => $value)
                      <tr>
                        <td><b>{{ $attribute }}</b></td>
                        <td>{{ $value }}</td>
                      </tr>
                    @endforeach
                  </table>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
</div>
</div>
</div>
</div>
</table>
</div>
</div>
</div>
</div>

      </div>
    @endsection