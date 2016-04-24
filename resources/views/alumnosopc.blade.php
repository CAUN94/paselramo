@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Administración de Alumnos</div>

                <div class="panel-body">
                <table align="center">
                <tr>
                <td>
                    <a class="btn btn-default" href="/admin/alumnos/Inscribir" role="button">Inscritos</a>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				</td>
				<td>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a class="btn btn-default" href="/admin/alumnos/Solicitar" role="button">Solicitados</a>
				</td>
				</tr>
				</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
