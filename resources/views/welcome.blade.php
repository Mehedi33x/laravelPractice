<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8fafc;
        }

        .container {
            display: flex;
            gap: 20px;
            max-width: 800px;
            width: 100%;
        }

        .column {
            flex: 1;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section {
            margin-bottom: 20px;
        }

        .section label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .section input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="container">
        <div class="column">
            <form action="{{ url('/web') }}" method="GET">
                <div class="section">
                    <label for="input1">Web Routes</label>
                    <input type="text" id="input1" name="web" placeholder="Enter text">
                    <div class="section">
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column">
            <form action="{{ url('/api') }}" method="GET">
                <div class="section">
                    <label for="input5">Api Routes</label>
                    <input type="text" id="input5" name="api" placeholder="Enter text">
                    <div class="section">
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column">
            <form action="{{ url('/admin/admin') }}" method="GET">
                <div class="section">
                    <label for="input5">Admin Routes</label>
                    <input type="text" id="input5" name="admin" placeholder="Enter text">
                    <div class="section">
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column">
            <form action="{{ url('/developer/developer') }}" method="GET">
                <div class="section">
                    <label for="input5">Developer Routes</label>
                    <input type="text" id="input5" name="developer" placeholder="Enter text">
                    <div class="section">
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
