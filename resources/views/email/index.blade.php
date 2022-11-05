<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="build/assets/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h1> {{ $class_time['title'] }}</h1>
                </div>
                <div class="card-body">
                    <h3> {{ $class_time['name'] }}</h3>
                    <p> {{ $class_time['subject'] }}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
