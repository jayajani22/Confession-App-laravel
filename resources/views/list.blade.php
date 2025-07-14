<!DOCTYPE html>
<html>
<head>
    <title>Confession List</title>
    <style>
        body {
            background: linear-gradient(to right, #f6d365, #fda085);
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .submit-button {
            text-align: center;
            margin-bottom: 20px;
        }

        .submit-button a button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }

        .confession {
            background: #f1f1f1;
            border-left: 6px solid #ff7e5f;
            margin: 20px 0;
            padding: 15px 20px;
            border-radius: 10px;
            animation: slideUp 0.4s ease;
        }

        .confession p {
            margin: 6px 0;
            color: #333;
        }

        .confession strong {
            font-weight: bold;
            color: #444;
        }

        .delete-form {
            margin-top: 10px;
        }

        .delete-form input[type="password"] {
            padding: 6px;
            border-radius: 5px;
            border: 1px solid #aaa;
            width: 150px;
            user-select: none;
        }

        .delete-form input[type="password"]::selection {
            background: none;
        }

        .delete-form button {
            background: #ff4d4d;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            margin-left: 10px;
            cursor: pointer;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Anonymous Confessions</h2>

        <div class="submit-button">
            <a href="{{ url('/') }}">
                <button>Submit Another Confession</button>
            </a>
        </div>

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @foreach($confessions as $confess)
            <div class="confession">
                <p><strong>City:</strong> {{ $confess->city }}</p>
                <p><strong>Title:</strong> {{ $confess->title }}</p>
                <p><strong>Message:</strong> {{ $confess->message }}</p>

                <form action="{{ url('/delete/'.$confess->id) }}" method="POST" class="delete-form">
                    @csrf
                    <input type="password" name="code" placeholder="Enter your code" required>
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>

</body>
</html>
