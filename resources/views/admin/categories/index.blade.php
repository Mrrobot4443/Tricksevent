@extends('admin.layouts.app');

@section('content')
@include('admin.layouts.top_menu')
@include('admin.layouts.side_bar')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Category</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Category</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col" class="text-white">n°</th>
                                            <th scope="col" class="text-white">Nom de la catégorie</th>
                                            <th scope="col" class="text-white">Date de création</th>
                                            <th scope="col" class="text-white">Date de modification</th>
                                            <th scope="col-md-4" class="text-white justify-content-center align-items-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $key => $category)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                                <td>{{ $category->updated_at->diffForHumans() }}</td>
                                                <td>
                                                    <a class="btn btn-secondary text-white" data-bs-dismiss="modal"
                                                        href="{{ route('category.edit', encrypt($category->id)) }}">modifier</a>
                                                    <form action="{{ route('category.destroy', $category->id) }}"
                                                        method="POST" id="{{ $category->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <div class="modal-footer">
                                                            <button onclick="event.preventDefault();
                                                            if(confirm('Voulez vous supprimer la catégorie {{ $category->name}}?'))document.getElementById ({{ $category->id }}).submit()"  class="btn btn-danger ">Supprimer</button>

                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
