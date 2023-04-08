<html>
    <head>
        <link rel="stylesheet" href="CSS/popup.css">
    </head>
    <body>
        <div class="contain">
            <div class="head">
            <?php
                $RoomNum=$_GET['room_number'];
                echo "<h1>Room ".$RoomNum."</h1>";
            ?>
            </div>
            <hr>
            <div class="timetable">
                <table border=1>
                    <thead>
                        <td>Time</td>
                        <td>Sunday</td>
                        <td>Monday</td>
                        <td>Tuseday</td>
                        <td>Wednsday</td>
                        <td>Thursday</td>
                    </thead>
                    <tr>
                        <td>9 - 9:50</td>
                        <td>Data Structure</td>
                    </tr>
                    <tr>
                        <td>9:50 - 10:40</td>
                        <td>Data Structure</td>
                    </tr>
                    <tr>
                        <td>10:50 - 11:40</td>
                    </tr>
                    <tr>
                        <td>11:50 - 12:40</td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="detail">
                <p>Number of avilable PCs :</p>
                <p>Number of avilable Chairs : </p>
                <p>Projector's State : </p>
            </div>
            <hr>
            <div class="button">
                <form action="#">
                    <label>Report for : </label>
			            <select name="department">
				            <option value="1">Not Enough Chairs</option>
				            <option value="2">Pc is not working</option>
				            <option value="3">projector down</option>
				            <option value="4">All of the above</option>
				            <option value="5">Something else</option>
			        </select>
                </form>
            </div>
        </div>
    </body>
</html>