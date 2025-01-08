<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art & History Museum</title>
    <style>
        /* General Reset */
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

        /* Container */
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            text-align: center;
            background-color:rgb(153,153,255);
            padding: 20px;
            margin-bottom: 30px;
            position: relative;
            border-radius: 50px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .header p {
            font-size: 1.2rem;
            font-style: italic;
            margin-top: 5px;
        }

        /* Section */
        .content .card {
            background: rgb(192,223,255);
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
            text-align: center;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .content .card h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .content .card p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }

        .content .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Decorative Pins */
        .card::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 15px;
            height: 15px;
            background-color:rgb(96,176,192);
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>History</h1>
        </header>
        <section class="content">
            <div class="card">
                <h2>Art gallery</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis risus felis.</p>
                <img src="assets/images/art_gallery.jpg" alt="Art gallery">
            </div>
            <div class="card">
                <h2>Art history</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis risus felis.</p>
                <img src="assets/images/art_history.jpg" alt="Art history">
            </div>
            <div class="card">
                <h2>Classic Art</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis risus felis.</p>
                <img src="assets/images/classic_art.jpg" alt="Classic Art">
            </div>
            <div class="card">
                <h2>The museum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis risus felis.</p>
                <img src="assets/images/museum.jpg" alt="The museum">
            </div>
        </section>
    </div>
</body>
</html>
<br>
<br>
<br>

<div class="photo-gallery mt-4 text-center">
    <h2>Get to know our officers</h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4">
            <img src="assets/images/photo7.webp" class="img-fluid rounded shadow fixed-size">
        </div>
    </div>
</div>

<style>
    .fixed-size {
        width: 5000px; 
        height: 1000px; 
        object-fit: cover; 
    }

    .photo-gallery {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
