<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="fontend/css/style.css">
    <title>Multi Register</title>
  </head>
  <body>

    <div class="container">
        <div class="choose-option mt-10">
            <h2>Choose as you like</h2>
        </div>

        <section>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('form.one')}}">
                        <div class="col bg-danger text-white text-center p-4">Form 1</div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('form.two')}}">
                        <div class="col bg-primary text-white text-center p-4">Form 2</div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('form.three')}}">
                        <div class="col bg-success text-white text-center p-4">Form 3</div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{route('form.four')}}">
                        <div class="col bg-warning text-white text-center p-4">Form 4</div>
                    </a>
                </div>
              </div>
        </section>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>


