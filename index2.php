<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>préparation du caffé</title>
    <script>
        function testerNom() {
            var nom = document.getElementById('i1').value;
            if (nom.trim() === '') {
                document.getElementById('l1').innerText = 'Name cannot be empty.';
            } else if (/\d/.test(nom)) {
                document.getElementById('l1').innerText = 'Name should not contain numbers.';
            } else {
                document.getElementById('l1').innerText = '';
            }
        }

        function testerEmail() {
            var email = document.getElementById('i2').value;
            var regex = /^[a-zA-Z0-9._%+-]+@(gmail|yahoo)\.com$/;
            if (!regex.test(email)) {
                document.getElementById('l2').innerText = 'Please enter a valid email address.';
            } else {
                document.getElementById('l2').innerText = '';
            }
        }
        function deleteOrder() {
    if (confirm("Are you sure you want to delete this order?")) {
        window.location.href = "delete_order.php";
    }
}
    </script>
    <style>
        /* Style pour le formulaire */
        form {
           max-width: 1000px; /* Largeur maximale du formulaire */
           margin: auto; /* Centre le formulaire horizontalement */
           padding:  100px;
           border: 10px solid #d1b07fc6;
           border-radius: 5px;
           display: flex;
           flex-direction: column;
           align-items: center;/*alligner les labels dans le centre*/
           justify-content: center;
          
           background: linear-gradient(to bottom, #8e6a51b2, #aa8c65), url('https://i.pinimg.com/236x/19/03/b2/1903b297cf667a2a719e60902a05a630.jpg');
        background-size: cover;
          
       }

    /* Style pour les checkboxes */
input[type="checkbox"] {
    margin-right: 5px;
    margin-bottom: 10px;
}

/* Style pour les labels des checkboxes */
label[for="order"] {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 5px;
}

        /* Style pour les champs de saisie */
    input[type="text"],
    input[type="email"],
    input[type="radio"],
    select,
    textarea {
        padding: 5px;
        border: 2px solid #ccc;
        border-radius: 5px;
        width: 100%;
        background-color: beige;
        margin-bottom: 10px;
    }

    input[type="radio"] {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px; /* Espacement entre l'image et le libellé */
    }

    
   
    fieldset{
        margin-top: 0%;
        margin-bottom: 50px; /*  pour l'espacement vertical */
        width: 700px;
        
        
    }
   

    /* Style pour les boutons */
input[type="submit"],
input[type="reset"],
button[type="button"] {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #5a3535;
    color: white;
    cursor: pointer;
    transition: box-shadow 0.3s;
    width: 100%;
    margin-top: 5px; /* Add margin to match the reset button */
}

/* Hover effect */
input[type="submit"]:hover,
input[type="reset"]:hover,
button[type="button"]:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
   
</style>
   

   

</head>
<body>
    <form action="connect.php" method="post">
        <fieldset>
        <legend style="font-size: 1.2rem; font-weight: bold;">informations personnelles</legend>
       
        <label for="fname" id="l1" style="font-size: 1.2rem; font-weight: bold;" >Name</label><br>
        <input type="text" id="i1" name="name" placeholder="Enter your name" required oninput="testerNom()"><br>
    
        <label for="adresse" id="l2">Email Address:</label>
        <input type="email" id="i2" name="email" placeholder="Enter your email" required oninput="testerEmail()" name="email"><br>
    
        <label for="num" style="font-size: 1.2rem; font-weight: bold;">Enter your number</label>
        <input type="tel" id="num" name="num" placeholder="+216"  style="background-color: beige;"><br>
       
       </fieldset>
        
       <label for="coffeeType" style="font-size: 1.2rem; font-weight: bold;">How do you like your coffee?</label>
<br>
<label for="hotCoffee"><img src="https://i.pinimg.com/564x/69/39/34/693934e9b0d8dbcade9494b64cee329b.jpg" alt="Hot Coffee" style="width: 100px; height: 90px;"> Hot Coffee</label>
<br>
<input type="radio" id="hotCoffee" name="coffee-temperature" value="hot">

<br>
<label for="coldCoffee"><img src="https://i.pinimg.com/564x/a1/d8/8c/a1d88cadc7f1b9fd65238f39ae295d1b.jpg" alt="Cold Coffee" style="width: 100px; height: 90px;"> Iced Coffee</label>
<br>
<input type="radio" id="coldCoffee" name="coffee-temperature" value="Iced">
<br>

<label for="coffeeContainer" style="font-size: 1.2rem; font-weight: bold;">How do you want your coffee served?</label>
<br>
<label for="inMug"><img src="https://i.pinimg.com/564x/a3/50/ee/a350eef200ff69f0ef211035655d865b.jpg" alt="In a Mug" style="width: 100px; height: 90px;"> In a mug</label>
<br>
<input type="radio" id="inMug" name="coffee-container" value="mug">
<br>
<label for="inToGoCup"><img src="https://i.pinimg.com/564x/84/99/48/849948f9c5bc01452d9b061ffd0dc586.jpg" alt="In a To-Go Cup" style="width: 100px; height: 90px;"> In a to-go cup</label>
<br>
<input type="radio" id="inToGoCup" name="coffee-container" value="toGoCup">

<label for="ltype" style="font-size: 1.2rem; font-weight: bold;">Type of coffee</label><br>
<select id="coffee-type" name="coffee-type" size="2">
    <option value="cappuccino" selected>Cappuccino</option>
    <option value="latte">Latte</option>
    <option value="turkish">Turkish Coffee</option>
    <option value="filter">Filter Coffee</option>
</select><br>

<label for="order">What are you going to order?</label><br>
<label for="coffee">Coffee</label><br>
<input type="checkbox" id="coffee" name="order" value="coffee">
<label for="gateaux">Gateaux</label><br>
<input type="checkbox" id="gateaux" name="order" value="gateaux">
<label for="greenTea">Green Tea</label><br>
<input type="checkbox" id="greenTea" name="order" value="greenTea">
<label for="croissant">Croissant</label><br>
<input type="checkbox" id="croissant" name="order" value="croissant">

<label for="review" style="font-size: 1.2rem; font-weight: bold;">Please leave a review:</label><br>
<textarea id="review" name="review" rows="4" cols="50" placeholder="Write your review here..."></textarea><br>
        <input type="submit" name="addClient" value="envoyer">
        <input type="reset" value="annuler">
        
        <button type="button" onclick="deleteOrder()">Supprimer Order</button>
    </form>
    
</body>
</html>