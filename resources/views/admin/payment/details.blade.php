@extends('./admin/layout/master')
@section('content')

    <main id="main" class="main">
        <div class="card">
        <div class="card-body">
          <h5 class="card-title">Payment Details Page</h5>

          <!-- Table with stripped rows -->
          <table class="table table-striped">
                <table class="table table-bordered border-primary">
                    <div class="row">
                        <tbody>
                            <tr>
                                <td class="col-md-3">Payment Method name</td>
                                <td>{{ $payment->payment_method }}</td>
                            </tr>
                            <tr>
                                <td>Payment Number</td>
                                <td>{{ $payment->payment_number }}</td>
                            </tr>
                            <tr>
                                <td>Account Holder Name</td>
                                <td>{{ $payment->account_holder_name }}</td>
                            </tr>
                            <tr>
                                <td>Account Number</td>
                                <td>{{ $payment->account_no }}</td>
                            </tr>
                            <tr>
                                <td>Branc Name</td>
                                <td>{{ $payment->branch_name }}</td>
                            </tr>        
                        </tbody>
                    </div>
                </table>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
    </main><!-- End #main -->
    @endsection