<?php 

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <style>
        @keyframes floatAnimation {
            0% { transform: translateY(0); }
            40% { transform: translateY(-15px); }
            100% { transform: translateY(0); }
        }

        .login-container:hover {
            background: linear-gradient(to bottom, #4b0082,hsl(328, 100.00%, 53.90%)) !important;
        }
        .container {
            margin-top:10%;
            width: 500px !important; /* Increase width */
            padding: 100px !important;  /* Increase padding */
            border-radius: 15px;       /* Optional: More rounded edges */
            background-color: #F2F2F2;
        }

        div{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        
        body {
            background-color:pink;
        }

      
        .w-container:hover {
            background: linear-gradient(to bottom,hsl(275, 100.00%, 25.50%), #ff1493) !important;
        }
        .w-container {
            background: hsl(275, 100.00%, 25.50%) !important;
            border-radius: 10%;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.8) !important;
            width: 720px; /* Reduced by 20% (previously 900px) */
            padding: 48px; /* Reduced padding */
            margin: 50px auto; /* Centered with margin */
            transition: background 0.5s ease;
            animation: floatAnimation 3s infinite ease-in-out;
            min-height: 400px; /* Reduced height */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-primary {
            background: linear-gradient(to right, #6a11cb, #2575fc) !important;
            border: none !important;
        }
</style>
