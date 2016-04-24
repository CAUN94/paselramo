@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Administración de cursos</div>

                <div class="panel-body">
                <table align="center">
                
				<tr>

				@foreach($Uni as $u)
				<td>
				<a class="btn btn-default" href="/admin/cursos/{{$u->id}}" role="button">{{$u->Nombre}}</a>
				</td>
				@endforeach
				
				</tr>
				</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
