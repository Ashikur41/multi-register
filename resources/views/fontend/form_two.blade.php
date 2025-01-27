<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Colored Forms</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .form-blue {
                background-color: #d1ecf1;
                border: 1px solid #bee5eb;
            }
            .container{
                background-color: #d1ecf1;
            }
        </style>
    </head>
    <body>
        <div class="container py-5">
            <div class="row gy-4">
                <!-- Blue Form -->
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="p-4 form-blue rounded">
                        <h4 class="text-primary">Blue Form</h4>
                        <form>
                            <div class="mb-3">
                                <label for="emailYellow" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="emailYellow" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="emailYellow" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="emailYellow" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="emailBlue" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailBlue" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="passwordBlue" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordBlue" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
</x-app-layout>