<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Colored Forms</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .form-green {
                background-color: #d4edda;
                border: 1px solid #c3e6cb;
            }
            .container{
                background-color: #d4edda;
            }
        </style>
    </head>
    <body>
        <div class="container py-5">
            <div class="row gy-4">
                <!-- Green Form -->
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="p-4 form-green rounded">
                        <h4 class="text-success">Green Form</h4>
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
                                <label for="emailGreen" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailGreen" placeholder="Enter email">
                            </div>
                            <div class="mb-3">
                                <label for="passwordGreen" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordGreen" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
</x-app-layout>