<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }
        input[type="url"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        button {
            padding: 0.5rem 1rem;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: -0.5rem;
            margin-bottom: 1rem;
        }
        .short-url {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>URL Shortener</h2>
        <form action="/shorten" method="POST">
            @csrf
            <input type="url" name="original_url" placeholder="Enter your URL here" required>
            @error('original_url')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Shorten</button>
        </form>

        @if (session('short_url'))
            <div class="short-url">
                <h3>Your shortened URL:</h3>
                <a href="{{ session('short_url') }}" target="_blank">{{ session('short_url') }}</a>
            </div>
        @endif
    </div>
</body>
</html>
