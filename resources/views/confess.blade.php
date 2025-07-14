<!DOCTYPE html>
<html>
<head>
    <title>Submit Confession</title>
    <style>
        body {
            background: linear-gradient(to right, #f6d365, #fda085);
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            animation: fadeIn 0.8s ease;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 500px;
            animation: slideUp 0.6s ease;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #555;
        }

        select, input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-top: 5px;
            font-size: 15px;
            outline: none;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 12px;
            background: #ff7e5f;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #eb6750;
        }

        .note {
            font-size: 13px;
            color: #888;
            margin-top: 5px;
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Submit Anonymous Confession</h2>
        <form action="{{ url('/store') }}" method="POST">
            @csrf

            <label>City:</label>
           <select name="city" required>
    <option value="">-- Select City --</option>
    <option>Ahmedabad</option>
    <option>Mumbai</option>
    <option>Delhi</option>
    <option>Jaipur</option>
    <option>Kolkata</option>
    <option>Bengaluru</option>
    <option>Pune</option>
</select>


            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Message:</label>
            <textarea name="message" rows="5" required></textarea>

            <label>Delete Code (4-digit):</label>
            <input type="password" name="code" maxlength="4" required>
            <div class="note">Keep this code safe to delete your confession later.</div>

            <button type="submit">Submit Confession</button>
        </form>
    </div>

</body>
</html>
