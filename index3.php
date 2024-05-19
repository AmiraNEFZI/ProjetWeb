<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Menu</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f5dc; /* Beige color */
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .menu-container {
            max-width: 2000px;
            margin-right: 0 ;
            margin-left: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            background: linear-gradient(135deg, #8B4513, #D2B48C); /* Dégradé de brun à beige */
        }

        .menu-item {
            position: relative;
            width: 30%;
            margin-bottom: 20px;
            background-color: #e8c6acab;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s; /* Ajoute une transition pour un effet plus fluide */
            overflow: hidden; /* Hide overflow to prevent pseudo-element from overflowing */
        }

        .menu-item:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Change l'ombre lors du survol */
        }

        .menu-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s; /* Add transition for image transform */
        }

        .menu-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(245, 245, 220, 0.8); /* Beige color with opacity */
            opacity: 0; /* Initially hidden */
            transition: opacity 0.3s; /* Add transition for opacity change */
        }

        .menu-item:hover::before {
            opacity: 1; /* Show beige color on hover */
        }

        .menu-item:hover img {
            transform: scale(1.1); /* Zoom in slightly on hover */
        }

        .menu-item h3 {
            margin-top: 10px;
            font-size: 20px;
            color: #5a3535;
        }

        .menu-item p {
            margin-top: 5px;
            font-size: 16px;
            color: #777;
        }

        .order-box {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #8B4513; /* Brown color */
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            display: none;
        }

        .menu-item:hover .order-box {
            display: block;
        }

        .heart-icon {
            position: absolute;
            top: -15px;
            right: 5px;
            color: red;
            font-size: 24px;
            display: none;
        }

        .menu-item:hover .heart-icon {
            display: block;
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <div class="menu-item">
            <span class="heart-icon">&#9825;</span>
            <img src="https://i.pinimg.com/564x/06/16/3b/06163b78d7fb86791f88b8db7c54c9ff.jpg" alt="Coffee 1">
            <h3>Turkish coffee</h3>
            <p>7.0dt</p>
            <div class="order-box">Order Now</div>
        </div>
        <div class="menu-item">
            <span class="heart-icon">&#9825;</span>
            <img src="https://i.pinimg.com/236x/89/d0/2a/89d02a326dba2e2aab84c88bdca00bff.jpg" alt="Coffee 2">
            <h3>Lattee</h3>
            <p>16.0dt</p>
            <div class="order-box">Order Now</div>
        </div>
        <div class="menu-item">
            <span class="heart-icon">&#9825;</span>
            <img src="https://i.pinimg.com/236x/0c/0e/09/0c0e099a666b70e58905d85c559a8d96.jpg" alt="Coffee 3">
            <h3>Coffée crème</h3>
            <p>20.0dt</p>
            <div class="order-box">Order Now</div>
        </div>
        <div class="menu-item">
            <span class="heart-icon">&#9825;</span>
            <img src="https://i.pinimg.com/236x/29/8c/93/298c9384a38b382445a29b09dfa083a4.jpg" alt="Coffee 4">
            <h3>Iced coffee</h3>
            <p>10.0dt</p>
            <div class="order-box">Order Now</div>
        </div>
        <div class="menu-item">
            <span class="heart-icon">&#9825;</span>
            <img src="https://i.pinimg.com/236x/e8/9e/6e/e89e6ec951b3f5633899f674182d5fba.jpg" alt="Coffee 5">
            <h3>Coffée crème avec fruits secs</h3>
            <p>22.0dt</p>
            <div class="order-box">Order Now</div>
        </div>
        <div class="menu-item">
            <span class="heart-icon">&#9825;</span>
            <img src="https://i.pinimg.com/236x/e6/1f/46/e61f46f8be0398e4a882583a8e27dd7a.jpg" alt="Coffee 6">
            <h3>Chocolat au lait</h3>
            <p>5.50dt</p>
            <div class="order-box">Order Now</div>
        </div>
    </div>
</body>
</html>