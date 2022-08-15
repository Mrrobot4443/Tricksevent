@extends('admin.layouts.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Events</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Events</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All events</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col" class="text-white">n°</th>
                                            <th scope="col" class="text-white">title</th>
                                            <th scope="col" class="text-white">category</th>
                                            <th scope="col" class="text-white">ville</th>
                                            <th scope="col" class="text-white">content</th>
                                            <th scope="col" class="text-white">prix</th>
                                            <th scope="col" class="text-white">date_debut</th>
                                            <th scope="col" class="text-white">date_end</th>
                                            <th scope="col" class="text-white">sponsor</th>
                                            <th scope="col" class="text-white">admin's</th>
                                            <th scope="col" class="text-white">image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $key => $events)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $events->titre }}</td>
                                                <td>{{ $events->category->name}}</td>
                                                <td>{{ $events->villes->name }}</td>
                                                <td>{{ $events->content }}</td>
                                                <td>{{ $events->prix }}</td>
                                                <td>{{ $events->date_debut }}</td>
                                                <td>{{ $events->date_fin }}</td>
                                                <td>{{ $events->sponsor }}</td>
                                                <td>{{ $events->user_type }}</td>
                                                <td>{{ $events->image }}</td>
                                                <td>
                                                    <form action="{{ route('event.destroy', $events->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                                            <a class="btn btn-secondary text-white" data-bs-dismiss="modal"
                                                                href="{{ route('event.edit', encrypt($events->id)) }}">modifier</a>
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
