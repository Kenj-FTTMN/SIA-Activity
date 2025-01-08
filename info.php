<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Officials</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: url('assets/images/background.jpg') no-repeat center center/cover;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            background-color: rgb(153, 153, 255);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 20px;
        }

        .header h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .top {
            text-align: center;
            margin-bottom: 30px;
        }

        .top .card {
            display: inline-block;
            background: rgb(192, 223, 255);
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .top .card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #ccc;
            margin-bottom: 10px;
        }

        .top .card h2 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: center;
        }

        .grid .card {
            background: rgb(192, 223, 255);
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .grid .card img {
            display: block;
            margin: 0 auto; 
            width: 100%;
            max-width: 120px;
            height: auto;
            border-radius: 50%;
            border: 2px solid #ccc;
            margin-bottom: 10px;
        }

        .grid .card h2 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .grid .card p {
            font-size: 1rem;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Barangay Officials</h1>
        </header>
        
        <section class="top">
            <div class="card">
                <img src="assets/images/officer1.jpg" alt="Punong Barangay">
                <h2>Punong Barangay</h2>
                <p>Julito Ogsimer</p>
            </div>
        </section>
        
        <section class="grid">
            <div class="card">
                <img src="assets/images/officer2.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Laurence Dagoc</p>
            </div>
            <div class="card">
                <img src="assets/images/officer3.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Mark Anthony Bustamante</p>
            </div>
            <div class="card">
                <img src="assets/images/officer4.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Asperino Baconga</p>
            </div>
            <div class="card">
                <img src="assets/images/officer5.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Kenneth Ray E. Lao</p>
            </div>
            <div class="card">
                <img src="assets/images/officer6.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Celbon Dena</p>
            </div>
            <div class="card">
                <img src="assets/images/officer7.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Rowena Raye Mediana</p>
            </div>
            <div class="card">
                <img src="assets/images/officer8.jpg" alt="Kagawad">
                <h2>Kagawad</h2>
                <p>Shiva Mae Jandayan</p>
            </div>
            <div class="card">
                <img src="assets/images/officer9.jpg" alt="SK Chairman">
                <h2>SK Chairman</h2>
                <p>Mark Malacat</p>
            </div>
        </section>
    </div>
</body>
</html>
