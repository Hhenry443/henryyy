<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>I HATE HENRY</title>

    <link rel="stylesheet" href="/css/hate.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Bartle&family=Bebas+Neue&display=swap" rel="stylesheet">

    <script src="./js/hate.js"></script>
    <script src="https://kit.fontawesome.com/01e87deab9.js" crossorigin="anonymous"></script>
</head>

<body>
    <a class="back-arrow" href="/">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <form id="frmHate" name="frmHate" action="/php/index.php?action=submitHate" method="POST" class="hate-form" onSubmit="return warning()">
        <fieldset class="hate-field">
            <legend>I HATE <a href="/">HENRY</a></legend>
            <label for="answer" class="input-label">Why do you hate Henry?</label>
            <textarea id="answer" name="answer"></textarea>

            <div class="secondary-input">
                <div id="name-input">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" />
                </div>

                <div id="email-input">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" />
                </div>
            </div>

            <div class="tertiary-input">
                <input type="submit" class="final-button" value="SUBMIT" />
                <input type="button" class="final-button" value="CLEAR" onClick="clearForm()" />
            </div>
        </fieldset>
    </form>

    <script>
        function clearForm() {
            document.getElementById("frmHate").reset();
        }

        function warning() {
            var w = "";
            if (document.frmHate.answer.value.trim() == "") w += "You didn't say why you hate Henry.\n";
            if (document.frmHate.name.value.trim() == "") w += "You didn't tell your name.\n";
            var email = document.frmHate.email.value.trim();
            if (email == "") w += "You didn't tell your e-mail address.";
            else if (!isEmail(email)) w += "The e-mail address you provided is not correct.";
            if (w != "") {
                alert(w);
                return false;
            }
            return true;
        }

        function isEmail(strEmail) {
            validRegExp = /^[^@]+@[^@]+\.[a-z]{2,}$/i;
            // search email text for regular exp matches
            if (strEmail.search(validRegExp) == -1) {
                return false;
            }
            return true;
        }
    </script>
</body>

</html>