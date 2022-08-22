@extends('admin.layouts.app');

@section('content')
    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Ticket</h4>
                        </div>
                        <div class="card-body">
                            <div class="create-event-form">
                                <form action="{{ route('ticket.edit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="mb-3">General Info</h5>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="titre">Event Title</label>
                                            <input type="text" class="form-control" id="titre" placeholder=""
                                                name="event_id">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="category">Category</label>
                                            <select id="category" class="form-control" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ville">ville</label>
                                            <select id="ville" class="form-control" name="villes_id" type="text">
                                                @foreach ($villes as $villes)
                                                    <option value="{{ $villes->id }}">{{ $villes->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('villes_id')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <textarea class="form-control" placeholder="n°"@error('Quantity') is-invalid @enderror id="quantity"
                                            name="quantity"></textarea>
                                        @error('Quantity')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="prix">bronze price</label>
                                    <input type="number" class="form-control" id="prix" placeholder="" name="events_id">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="prix">silver price</label>
                                    <input type="number" class="form-control" id="prix" placeholder="" name="ticket_price_1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="prix">gold price</label>
                                    <input type="number" class="form-control" id="prix" placeholder="" name="ticket_price_2">
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" placeholder="Write the description"@error('content') is-invalid @enderror id="content"
                                        name="events_id"></textarea>
                                    @error('content')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="start">Event Starts</label>
                                        <input type="datetime" class="form-control" id="start" placeholder=""
                                            name="events_id">
                                        @error('start')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="end">Event Ends</label>
                                        <input type="datetime" class="form-control" id="end" placeholder=""
                                            name="events_id">
                                        @error('end')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="admin">admin's</label>
                                        <input id="admin" class="form-control" name="user_type" type="text">

                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="events_id">
                                        @error('image')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
