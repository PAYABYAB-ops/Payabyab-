<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group 5 Team Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-size: cover;
            background-position: center;
            color: #333;
            overflow-x: hidden;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #E6E6FA;
            margin-bottom: 40px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .leader-profile,
        .profile {
            background: linear-gradient(to bottom right, #E6E6FA, #c0c0c0);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 300px;
            text-align: center;
            margin: 0 auto 20px;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .leader-profile:hover,
        .profile:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .leader-profile img,
        .profile img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #fff;
        }
        .leader-profile h2,
        .profile h2 {
            font-size: 1.8em;
            color: #333;
            margin: 10px 0;
        }
        .leader-profile p,
        .profile p {
            color: #555;
            margin: 5px 0;
        }
        .profiles {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .profile img {
            width: 120px;
            height: 120px;
        }
        .profile h2 {
            font-size: 1.6em;
        }
        .profile-description {
            display: none;
            color: #777;
            margin-top: 10px;
            font-size: 0.9em;
            line-height: 1.4;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            position: relative;
            border-radius: 10px;
            animation: fadeIn 0.5s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
    <script>
        function toggleDescription(id) {
            var description = document.getElementById(id);
            if (description.style.display === "none" || description.style.display === "") {
                description.style.display = "block";
            } else {
                description.style.display = "none";
            }
        }

        // Open modal
        function openModal(name, description, facebookLink) {
            document.getElementById("modal-content").innerHTML =
                `<span class="close" onclick="closeModal()">&times;</span>
                <h2>${name}</h2>
                <p>${description}</p>
                <p><a href="${facebookLink}" target="_blank">Visit Facebook</a></p>`;
            document.getElementById("modal").style.display = "flex";
        }

        // Close modal
        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }

        document.addEventListener("DOMContentLoaded", function() {
            // nag aadd ng event listeners sa mga  profile para mag open ang modal
            document.querySelectorAll('.profile').forEach(function(profile) {
                profile.addEventListener('click', function() {
                    const name = profile.querySelector('h2').textContent;
                    const description = profile.querySelector('.profile-description').textContent;
                    let facebookLink = "";


                   if (name === "Jaycee Mariñas") {
                        facebookLink = "https://www.facebook.com/profile.php?id=100077435326682";
                    } else if (name === "Jonh Clark Pensona") {
                        facebookLink = "https://www.facebook.com/lzpnsn?mibextid=ZbWKwL";
                    } else if (name === "James Matthew Payabyab") {
                        facebookLink = "https://www.facebook.com/profile.php?id=100009158433655&mibextid=ZbWKwL";
                    } else if (name === "Niña Lyka Calalang") {
                        facebookLink = "https://www.facebook.com/nyinyaaa?mibextid=ZbWKwL";
                    }

                    openModal(name, description, facebookLink);
                });
            });
        });
    </script>
</head>
<body>

    <div class="container">
        <h1>Meet Group 5</h1>

        <div class="leader-profile" onclick="toggleDescription('sean-desc')">
            <img src="sean.jpg" alt="Sean Espinilla">
            <h2>Sean Espinilla</h2>
            <p>Leader</p>
            <p id="sean-desc" class="profile-description">
                <?php
                echo "Hi, my name is Sean Espinilla. I'm 20 years old and currently residing here at Poblacion, Muntinlupa City, Katarungan Village. I have a hobby of learning how to code by watching videos and applying it to my own set of skills.";
                ?>
                <a href="https://www.facebook.com/sean.espenilla.39?mibextid=ZbWKwL" target="_blank">Visit Facebook</a>
            </p>
        </div>

        <div class="profiles">
            <div class="profile">
                <img src="jaycee.jpg" alt="Jaycee Mariñas">
                <h2>Jaycee Mariñas</h2>
                <p>Member</p>
                <p id="jaycee-desc" class="profile-description">
                    <?php
                    echo "Hi, I’m Jaycee. I’m 20 years old and currently live in Putatan, Muntinlupa City. My hobbies are playing online games, watching anime and Korean dramas, and playing basketball.";
                    ?>
                </p>
            </div>

            <div class="profile">
                <img src="clark.jpg" alt="Jonh Clark Pensona">
                <h2>Jonh Clark Pensona</h2>
                <p>Member</p>
                <p id="clark-desc" class="profile-description">
                    <?php
                    echo "Hi Brew! I'm Jonh Clark Alazo Pensona. 20 years old, from Southville 3, Poblacion, Muntinlupa City. ~If you want it, Work for it.";
                    ?>
                </p>
            </div>

            <div class="profile">
                <img src="james.jpg" alt="James Matthew Payabyab">
                <h2>James Matthew Payabyab</h2>
                <p>Member</p>
                <p id="james-desc" class="profile-description">
                    <?php
                    echo "Hi! I'm James Matthew Payabyab, 21 years old, and currently living at Poblacion, Muntinlupa City. Fun facts about me are that I love listening to different kinds of music, and I also like to watch TV series like 'The Walking Dead' and 'Lucifer'.";
                    ?>
                </p>
            </div>

            <div class="profile">
                <img src="lyka.jpg" alt="Niña Lyka Calalang">
                <h2>Niña Lyka Calalang</h2>
                <p>Member</p>
                <p id="lyka-desc" class="profile-description">
                    <?php
                    echo "Hi, I’m Niña. I’m 23 years old and currently live in Tunasan, Muntinlupa City. I like reading and watching movies, and I have a dog in our house.";
                    ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content" id="modal-content">

        </div>
    </div>

</body>
</html>
