@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Documentos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-doc')
                                <a href="{{ route('doc.create') }}" class="btn btn-warning">Nuevo</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead style="background: #6777ef;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Doc-Path</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($docs as $doc)
                                        <tr>
                                            <td style="display: none;">{{ $doc->id }}</td>
                                            <td>{{ $doc->titulo }}</td>
                                            <td>{{ $doc->doc_path }}</td>
                                            <td>
                                                <form action="{{ route('doc.destroy', $doc->id) }}" method="post">
                                                    @can('editar-doc')
                                                        <a href="{{ route('doc.edit', $doc->id) }}"
                                                            class="btn btn-info">Editar</a>
                                                    @endcan

                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-doc')
                                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $docs->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
