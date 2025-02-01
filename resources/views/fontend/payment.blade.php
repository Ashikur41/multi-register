<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: Arial, sans-serif;
            }
            
            body {
                background-color: #f5f5f5;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
    
            .payment-container {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
                width: 400px;
            }
    
            h2 {
                text-align: center;
                color: #333;
                margin-bottom: 20px;
            }
    
            .input-group {
                margin-bottom: 15px;
            }
    
            .input-group label {
                display: block;
                font-size: 14px;
                margin-bottom: 5px;
                color: #555;
            }
    
            .input-group input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }
    
            .card-icons {
                display: flex;
                gap: 10px;
                font-size: 24px;
                margin-bottom: 15px;
                justify-content: center;
                color: #555;
            }
    
            .payment-btn {
                width: 100%;
                padding: 12px;
                background: #28a745;
                border: none;
                border-radius: 5px;
                color: white;
                font-size: 18px;
                cursor: pointer;
                transition: 0.3s;
            }
    
            .payment-btn:hover {
                background: #218838;
            }
    
            .total-amount {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
                margin-bottom: 20px;
                color: #222;
            }
        </style>
    </head>
    <body>
    
        <div class="payment-container">
            <h2>Payment Details</h2>
            
            <div class="total-amount">
                Total Amount: <span>$99.99</span>
            </div>
    
            <div class="card-icons">
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-amex"></i>
                <i class="fa-brands fa-cc-paypal"></i>
            </div>
    
            <form>
                <div class="input-group">
                    <label>Cardholder Name</label>
                    <input type="text" placeholder="John Doe" required>
                </div>
    
                <div class="input-group">
                    <label>Card Number</label>
                    <input type="text" placeholder="1234 5678 9012 3456" required>
                </div>
    
                <div class="input-group">
                    <label>Expiration Date</label>
                    <input type="month" required>
                </div>
    
                <div class="input-group">
                    <label>CVV</label>
                    <input type="password" placeholder="123" required>
                </div>
    
                <button type="submit" class="payment-btn">Pay Now</button>
            </form>
        </div>
    
    </body>
    </html>
    
</x-app-layout>