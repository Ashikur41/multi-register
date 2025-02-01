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

    <body>

        <div class="container">

            <!-- Export a Table to PDF - START -->
            <link rel="stylesheet" type="text/css"
                href="{{ url('pdf') }}/Content/font-awesome/css/font-awesome.min.css" />

            <div class="container">
                <button id="exportButton" class="btn btn-lg btn-danger clearfix">
                    <span class="fa fa-file-pdf-o"></span>Payment Now
                </button>

                <button id="exportButton" class="btn btn-lg btn-danger clearfix">
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

            <!-- you need to include the shieldui css and js assets in order for the components to work -->
            <link rel="stylesheet" type="text/css"
                href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
            <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
            <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

            {{-- <script>
                // Define the Laravel route in a JavaScript variable
                var paymentPageUrl = "{{ route('payment.page') }}";
            
                document.getElementById("exportButton").addEventListener("click", function (e) {
                    e.preventDefault();
            
                    // Redirect to the payment page
                    window.location.href = paymentPageUrl; 
                });
            </script> --}}
            

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
