<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Colored Forms</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .form-yellow {
                background-color: #fff3cd;
                border: 1px solid #ffeeba;
            }
            .container{
                background-color: #fff3cd;
            }
        </style>
    </head>
    <body>
        <div class="container py-5">
            <div class="row gy-4">
                <!-- Yellow Form -->
                <div class="col-md-6">
                    <div class="p-4 form-yellow rounded">
                        <h4 class="text-warning">Yellow Form</h4>
                        <form id="myForm" action="{{route('register.info')}}" method="POST">
                            @csrf
                
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fast_name" id="fast_name" placeholder="Enter First Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Father's Name</label>
                                <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Father's Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Enter Mother's Name">
                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 form-red rounded">
                        <h4 class="text-danger">Live Input Display</h4>
                
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" id="display_fast_name" placeholder="First Name" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="display_last_name" placeholder="Last Name" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Father's Name</label>
                            <input type="text" class="form-control" id="display_father_name" placeholder="Father's Name" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mother's Name</label>
                            <input type="text" class="form-control" id="display_mother_name" placeholder="Mother's Name" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Get all input fields from the form
                let inputs = document.querySelectorAll("#myForm input");
        
                inputs.forEach(function (input) {
                    input.addEventListener("input", function () {
                        // Find the corresponding output field in the second div
                        let outputField = document.querySelector(`#display_${this.id}`);
                        if (outputField) {
                            outputField.value = this.value;
                        }
                    });
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

</x-app-layout>
