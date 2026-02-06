<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 100%;
        }
        .form-container h1 {
            color: #28a745;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Payment Successful!</h1>
    
    <form action="/Payments/Store" method="POST">
        @method("POST")
        @csrf
        <div class="form-group">
            <label for="name">Customer Name</label>
            <input type="text" id="name" name="name" value="{{ $session->customer_details->name }}" readonly>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" id="amount" name="total_price" value="{{ number_format($session->amount_total / 100, 2) }}" readonly>
        </div>

        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" value="{{ number_format($session->amount_total / 100, 2) }}" readonly>
        </div>

        <div class="form-group">
            <label for="status">Payment Status</label>
            <input type="text" id="status" name="status" value="{{ $session->payment_status }}" readonly>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{ $session->customer_details->email}}" readonly>
        </div>

        <div class="form-group">
            <label for="method">Payment Method</label>
            <input type="text" id="method" name="method" value="{{ $session->payment_method_types[0]}}" readonly>
        </div>

        <div class="form-group">
            <label for="method">Currency</label>
            <input type="text" id="method" name="currency" value="{{ $session->currency }}" readonly>
        </div>

        <button type="submit" class="btn">Save Submit</button>
    </form>
</div>

</body>
</html>