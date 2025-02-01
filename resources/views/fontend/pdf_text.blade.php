<x-app-layout>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Export to PDF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="{{ url('pdf') }}/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ url('pdf') }}/font-awesome/css/font-awesome.min.css" />

        <script type="text/javascript" src="{{ url('pdf') }}/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="{{ url('pdf') }}/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body onload="checkPaymentStatus()">

        <div class="container">

            <!-- Export a Table to PDF - START -->
            <link rel="stylesheet" type="text/css"
                href="{{ url('pdf') }}/Content/font-awesome/css/font-awesome.min.css" />

            <div class="container">
                <button id="paymentButton" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#paymentModal">
                    <span class="fa fa-credit-card"></span> Payment Now
                </button>

                <button id="exportButton" class="btn btn-lg btn-danger mt-3" style="display: none;">
                    <span class="fa fa-file-pdf-o"></span> Export to PDF
                </button>

                <table id="exportTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->fast_name }}</td>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->father_name }}</td>
                                <td>{{ $item->mother_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Enter Payment Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('payment.info')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="cardNumber">Cardholder Name</label>
                            <input type="text" name="card_holder_name" class="form-control" id="cardNumber" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="number"  class="form-control" id="cardNumber" name="card_number" placeholder="1234 5678 9012 3456">
                        </div>
                        <div class="form-group">
                            <label for="expiryDate">Expiry Date</label>
                            <input type="month" name="expiration_date" class="form-control" id="expiryDate">
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="number" name="cvv" class="form-control" id="cvv" placeholder="123">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="processPayment()">Pay Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <!-- you need to include the shieldui css and js assets in order for the components to work -->
            <link rel="stylesheet" type="text/css"
                href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
            <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
            <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

<script>
function processPayment() {
    // Simulating payment success (replace with actual payment gateway logic)
    let paymentSuccess = confirm("Was the payment successful?");

    if (paymentSuccess) {
        document.getElementById("exportButton").style.display = "inline-block"; // Show PDF button
        document.getElementById("paymentButton").style.display = "none"; // Hide payment button
    } else {
        alert("Payment was not successful. You cannot export to PDF.");
    }
}

</script>

            <script type="text/javascript">
                jQuery(function($) {
                    $("#exportButton").click(function() {
                        // parse the HTML table element having an id=exportTable
                        var dataSource = shield.DataSource.create({
                            data: "#exportTable",
                            schema: {
                                type: "table",
                                fields: {
                                    fast_name: {
                                        type: String
                                    },
                                    last_name: {
                                        type: String
                                    },
                                    father_name: {
                                        type: String
                                    },
                                    mother_name: {
                                        type: String
                                    }
                                }
                            }
                        });

                        // when parsing is done, export the data to PDF
                        dataSource.read().then(function(data) {
                            var pdf = new shield.exp.PDFDocument({
                                author: "PrepBootstrap",
                                created: new Date()
                            });

                            pdf.addPage("a4", "portrait");

                            pdf.table(
                                50,
                                50,
                                data,
                                [{
                                        field: "fast_name",
                                        title: "First Name",
                                        width: 100
                                    },
                                    {
                                        field: "last_name",
                                        title: "Last Name",
                                        width: 100
                                    },
                                    {
                                        field: "father_name",
                                        title: "Father Name",
                                        width: 100
                                    },
                                    {
                                        field: "mother_name",
                                        title: "Mother Name",
                                        width: 100
                                    }
                                ], {
                                    margins: {
                                        top: 50,
                                        left: 50
                                    }
                                }
                            );

                            pdf.saveAs({
                                fileName: "PrepBootstrapPDF"
                            });
                        });
                    });
                });
            </script>

            <style>
                #exportButton {
                    border-radius: 0;
                }
            </style>

            <!-- Export a Table to PDF - END -->

        </div>

    </body>

    </html>
</x-app-layout>
