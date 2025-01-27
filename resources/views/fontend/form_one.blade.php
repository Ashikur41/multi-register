<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Colored Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-red {
            background-color: #f8d7da;
            border: 1px solid #f5c2c7;
        }
        .container{
            background-color: #f8d7da;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row gy-4">
            <!-- Red Form -->
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="p-4 form-red rounded">
                    <h4 class="text-danger">Red Form</h4>
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
                            <label for="emailRed" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="emailRed" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="passwordRed" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwordRed" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-app-layout>