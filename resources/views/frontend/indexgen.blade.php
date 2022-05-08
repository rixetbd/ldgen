<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend_assets')}}/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="form-holder col-6">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Email Finder</h3>
                        <p>Fill in the data below.</p>
                        <form method="POST" action="{{route('lead_gen')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="first_name" placeholder="Full Name">
                                </div>

                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="last_name" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="domain" placeholder="example.com">
                            </div>

                            <div class="my-2">
                                <label class="form-check-label">I confirm that it's my responsibility.</label>
                            </div>


                            <div class="form-button">
                                <button id="submit" type="submit" class="btn btn-primary">Genarate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="form-holder col-6">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Generated Email</h3>
                        <p>Need to verify first</p>
                        <ul class="text-light">
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



    </script>

</body>

</html>
