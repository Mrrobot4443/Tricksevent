@extends('admin.layouts.app');

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Villes</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Villes</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Villes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col" class="text-white">n°</th>
                                            <th scope="col" class="text-white">Nom de la ville</th>
                                            <th scope="col" class="text-white">Date de création</th>
                                            <th scope="col" class="text-white">Date de modification</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ville as $key => $villes)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $villes->name }}</td>
                                                <td>{{ $villes->created_at->diffForHumans() }}</td>
                                                <td>{{ $villes->updated_at->diffForHumans() }}</td>
                                                <td>
                                                    <a class="btn btn-secondary text-white" data-bs-dismiss="modal"
                                                        href="{{ route('ville.edit', encrypt($villes->id)) }}">modifier</a>
                                                    <form action="{{ route('ville.destroy', $villes->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Supprimer</button>

                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>

                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
