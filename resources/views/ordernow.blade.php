@extends('master')
@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class=" text-right mt-2 mb-3">
                <a class="btn  btn-success" href="/cart_list">Back to cart</a>
            </div>

            <div class="col-md-10">
                <table class="table">
                    <thead>
                      <tr>
                        <th colspan="3">Bill to name</th>
                        <th>Charges(15%vat)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        {{-- <th scope="row">1</th> --}}
                        <td colspan="3">Amount</td>
                        <td>$ {{$total}}</td>
                        {{-- <td>@mdo</td> --}}
                      </tr>
                      <tr>
                        {{-- <th scope="row">2</th> --}}
                        <td colspan="3">Tax</td>
                        <td>$ {{$tax = $total * .15}}</td>
                        {{-- <td>@fat</td> --}}
                      </tr>
                      <tr>
                        {{-- <th scope="row">3</th> --}}
                        <td colspan="3">Delevery</td>
                        <td>$ 10</td>
                      </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total</th>
                            <th >$ {{$total+$tax+10}}</th>
                        </tr>
                    </tfoot>
                  </table>
            </div>


            <div class="col-md-12">
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="row mb-3">
                      <div class="col-sm-12">
                        <textarea name="address" id="" cols="50" rows="5" placeholder="Enter your address" required></textarea>
                      </div>
                    </div>
                    <fieldset class="row mb-3">
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment" id="gridRadios1" value="Cash" required >
                          <label class="form-check-label" for="gridRadios1">
                            Online Payment
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment" id="gridRadios2" value="Cash" required>
                          <label class="form-check-label" for="gridRadios2">
                            Bkash/Rocket Payment
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="payment" id="gridRadios3" value="Cash" required>
                          <label class="form-check-label" for="gridRadios3">
                            Cash on delivery
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Order now</button>
                  </form>
            </div>

    </div>
@endsection
