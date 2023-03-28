<?php include_once "validationBooking.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Booking.css">
    <title>Rooms Booking</title>
</head>
<body>
<div id="container">
    </div>
    <form  id="Booking" action="Booking.php" method="post" novalidate>
                <div class="form-left">
                    <h1>Rooms Booking</h1>
                    <label for="b_title">Booking Title <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_title" name="b_tittle" type="text" required>

                    <label for="b_date">Date <span class="errors"><?php echo $mess ;?></span></label >
                    <input id="b_date" name="b_date" type="date" required>

                    <label for="b_start">Start Time <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_start" name="b_start" type="time" required>

                    <label for="b_end">End Time <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_end" name="b_end" type="time" required>

                    <label for="b_duration">Duration <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_duration" name="b_duration" type="number" min="1" required>
                </div>

                <div class="form-right">
                    <label for="b_attendees">Total number of attendees <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_attendees" name="b_atte" type="number" min="1" required>

                    <label for="b_external_attendees">Number of External Attendees <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_external_attendees" type="number" name="b_exte" min="1" required>

                    <label for="b_Num_rooms">Number of rooms <span class="errors"><?php echo $mess ;?></span></label>
                    <input id="b_Num_rooms" name="b_exte" type="text"  required>
                    <br>
                    <br>
                    <input type="submit" value="Done" id="done" name="done" class="done">
                    <p class="errors"><?php echo $done ;?></p>
        </div>
</body>
</html>