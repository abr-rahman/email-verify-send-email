<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="build/assets/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="content">
                <h1>Email form</h1>
                    <form class="form" action="{{ route('email.store') }}" method="post">
                        @csrf
                        <label class="mail_to">
                            <input type="email" name="to" autocomplete="off" required>
                        </label>
                        <label class="title">
                            <input type="text" name="title" autocomplete="off" required>
                        </label>
                        <label class="name">
                            <input type="text" name="name" autocomplete="off" required>
                        </label>
                        <label class="subject">
                            <textarea name="subject" autocomplete="off" required></textarea>
                            {{-- <input type="text" name="subject" autocomplete="off" required> --}}
                        </label>
                        <input type="submit" value="Submit">
                        {{-- <div class="new">
                            <hr>
                            <a href="#" class="cna"> Create new account </a>
                        </div> --}}
                    </form>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
</body>
</html>
