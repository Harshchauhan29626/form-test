<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Form Entry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background: #f8f9fb;
        }
        form {
            max-width: 520px;
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        }
        label {
            display: block;
            margin-bottom: 0.25rem;
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid #d7dbe5;
            border-radius: 6px;
        }
        button {
            background: #2563eb;
            color: #fff;
            border: none;
            padding: 0.7rem 1.2rem;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }
        .note {
            margin-top: 1rem;
            color: #475569;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <form method="post" action="{{ url('/api/form-entries') }}">
        @csrf
        <label for="first_name">First Name</label>
        <input id="first_name" name="first_name" type="text" required>

        <label for="last_name">Last Name</label>
        <input id="last_name" name="last_name" type="text" required>

        <label for="mobile">Mobile</label>
        <input id="mobile" name="mobile" type="tel" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>

        <label for="city">City</label>
        <input id="city" name="city" type="text" required>

        <label for="country">Country</label>
        <input id="country" name="country" type="text" value="India" required>

        <label for="state">State</label>
        <input id="state" name="state" type="text" required>

        <button type="submit">Submit</button>
        <p class="note">Submissions are posted to the API and stored in the database.</p>
    </form>
</body>
</html>
