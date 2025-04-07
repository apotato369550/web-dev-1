<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing JSON through an API</title>
    <script type="text/javascript">
    let xmlHttp = new XMLHttpRequest();
    let url = "https://10.16.43.20/cvm/api/personal.php"
    // api url: 10.16.43.20/cvm/api/personal.php
    function displayObject(object) {
        var nameParagraph = document.getElementById("name");
        var ageParagraph = document.getElementById("age");
        var addressParagraph = document.getElementById("address");
        var hobbiesDiv = document.getElementById("hobbies");
        var employmentStatusParagraph = document.getElementById("employment-status");
        var phoneNumberParagraph = document.getElementById("phone-number");

        var name = object.name;
        var age = object.age;
        var address = object.address;
        var hobbies = object.hobbies;
        var employment = object.employment;
        var phoneNumber = object.phoneNumber;

        nameParagraph.innerText = name;
        ageParagraph.innerText = age;
        addressParagraph.innerText = address.street + ", " + address.city + ", " + address.state;
        for (let i = 0; i < hobbies.length; i++) {
            var newHobbyParagraph = document.createElement('p');
            newHobbyParagraph.innerText = hobbies[i];
            hobbiesDiv.appendChild(newHobbyParagraph);
        }

        if (employment) {
            employmentStatusParagraph.innerText = "Employed";
        } else {
            employmentStatusParagraph.innerText = "Unemployed";
        }

        if (phoneNumber) {
            phoneNumberParagraph.innerText = phoneNumber;
        } else {
            phoneNumberParagraph.innerText = "Not set";
        }

        document.getElementById("hello-image").src = object.photo;

    }

    window.onload = function () {
        xmlHttp.open('GET', url, true);
        xmlHttp.responseType = 'json';
        xmlHttp.withCredentials = false;
        xmlHttp.onload = function() {
            var status = xmlHttp.status;
            if (status === 200) {
                displayObject(xmlHttp.response);
            } else {
                alert("Error: " + xmlHttp.statusText);
            }
        };
        xmlHttp.send();
    }
    </script>
</head>
<body>
    <div>
        <h1>Say hello!</h1>
        <span>Meet: </span><p id="name">(placeholder)</p>
        <img src="" alt="image" id="hello-image" width="300" height="300">
        <br>
        <span>Age: </span><p id="age">(placeholder)</p>
        <span>Address: </span> <p id="address">(placeholder)</p>
        <h2>Hobbies: </h2>
        <div id="hobbies">
        </div>
        <span>Employment Status: </span> <p id="employment-status">(placeholder)</p>
        <span>Phone number: </span> <p id="phone-number">(placeholder)</p>
    </div>
</body>
</html>