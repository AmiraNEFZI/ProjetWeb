<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers Accounts</title>

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

       
    fieldset{
        margin-top: 0%;
        margin-bottom: 50px; /*  pour l'espacement vertical */
        width: 700px;
        
    }


    input[type="submit"],
    input[type="reset"]{

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

    input[type="submit"]:hover,
    input[type="reset"]:hover{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
   

       </style>
</head>
<body>

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

        </script>

<form action="connect.php" method="post">
        <fieldset>
        <legend style="font-size: 1.2rem; font-weight: bold;">informations personnelles</legend>
       
        <label for="fname" id="l1" style="font-size: 1.2rem; font-weight: bold;" >FullName</label><br>
        <input type="text" id="i1" name="name" placeholder="Enter your name" required oninput="testerNom()"><br>
    
        <label for="adresse" id="l2">Email Address:</label>
        <input type="email" id="i2" name="email" placeholder="Enter your email" required oninput="testerEmail()" name="email"><br>

        <label for="password" id="l3">password:</label>
        <input type="password" id="i3" name="password" placeholder="Enter your password" required ><br>
    
    
        <label for="num" style="font-size: 1.2rem; font-weight: bold;">Enter your number</label>
        <input type="tel" id="num" name="num" placeholder="+216"  style="background-color: beige;"><br>
       
       </fieldset>

       <input type="submit"name="addWorker" value="envoyer">
        <input type="reset" value="annuler">

</form>
    
</body>
</html>



