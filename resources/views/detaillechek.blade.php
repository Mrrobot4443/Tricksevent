@extends('layouts.app')
@section('content')
<div class="container-fluid pt-5">
    @if ($orders)
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">

                    <tbody class="align-middle">
                        @foreach ($orders->ligne as $lc)
                            <tr>
                                <td class="align-middle"><img src="" alt="" style="width: 50px;"></td>
                                <td class="align-middle">{{ $lc->events->titre }} DH</td>
                                <td class="align-middle">{{ $lc->events->price }} DH</td>
                                <td class="align-middle">{{ $lc->qte }}</td>
                                <td class="align-middle">{{ $lc->events->price * $lc->qte }} DH</td>
                                <td class="align-middle"><a href="" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a href=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    @else
    <div class="row px-xl-5 ">
        <div class="col-lg-8 table-responsive mb-5 ">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-danger text-light border-white-50">
                    <tr>
                        <th class="btn-light "scope="col">Event </th>
                        <th class="btn-light">Price</th>
                        <th class="btn-light">Quantity</th>
                        <th class="btn-light">Total</th>
                    </tr>
                </thead>
                <tbody class="align-middle border-white-50">
                        <tr>
                            <td class="align-middle">5555</td>
                            <td class="align-middle"></td>
                            <td class="align-middle"></td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
                <div class="card mb-5">
                    <div class="card-header bg-danger border-0">
                        <h4 class="fw-bolder m-0 ">Cart Summary</h4>
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
                        <a href="/client/checkout" class="btn btn-block btn-light my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
        </div>
    </div>
    @endif
</div>

@endsection
