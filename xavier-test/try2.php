<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .field{

            display: none;

        }

        .field.active{

            display: block;

        }

    </style>
</head>
<body>

    <form action="">

        <legend>Please select one of the following</legend>

        <input type="radio" name="action" id="track" value="track" /><label for="track">Track Submission</label><br />

        <input type="radio" name="action" id="event" value="event"  /><label for="event">Events and Artist booking</label><br />

        <label for="message"><input type="radio" name="action" id="message" value="message" onclick="appear()"/>Message us</label><br />

        <input type="text" class="field">

    </form>

    <script>

        function appear(){

            const field = document.querySelector('.field');
            
            field.classList.toggle('active');

        }

    </script>

</body>
</html>