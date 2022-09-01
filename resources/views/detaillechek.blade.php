@extends('layouts.app')
@section('content')
<div class="container-fluid pt-5">
    @if ($orders)
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($orders->ligne as $lc)
                            <tr>
                                <td class="align-middle"><img src="{{ asset('uploads') }}/{{ $lc->product->photo }}" alt="" style="width: 50px;">{{ $lc->product->name }}</td>
                                <td class="align-middle">{{ $lc->product->price }} DH</td>
                                <td class="align-middle">{{ $lc->qte }}</td>
                                <td class="align-middle">{{ $lc->product->price * $lc->qte }} DH</td>
                                <td class="align-middle"><a href="/client/lc/{{ $lc->id }}/destroy" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a href="/client/lc/{idlc}/destroy"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form action="/client/checkout" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="comande" value="{{ $comande->id }}">
                    <div class="card border-secondary mb-5">
                        <div class="card-header bg-secondary border-0">
                            <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium">Subtotal</h6>
                                <h6 class="font-weight-medium">{{ $comande->getTotal() }} DH</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">10 DH</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold">Total</h5>
                                <h5 class="font-weight-bold">{{ $comande->getTotal() + 10 }} DH</h5>
                            </div>
                            {{-- <button type="submit" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button> --}}
                            <a href="/client/checkout" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                        </div>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    @else
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                        <tr>
                            <td class="align-middle">0 DH</td>
                            <td class="align-middle">0</td>
                            <td class="align-middle">0 DH</td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">0 DH</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">0 DH</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">0 DH</h5>
                        </div>
                        <a href="/client/checkout" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
        </div>
    </div>
    @endif
</div>

@endsection
