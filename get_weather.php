<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Weather App</h1>

        <?php
  
        if(isset($_POST['city'])) {
            $city = $_POST['city'];
            $apiUrl = "http://api.openweathermap.org/data/2.5/forecast?q=$city&appid=cb19446a85808d188a5813cfb29e8aee";
            
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);

            if ($data && $data['cod'] === "200") {
                echo "<h2>5-Day Weather Forecast for $city:</h2>";
                echo "<div class='forecast'>";

                $dates = array();
                foreach ($data['list'] as $forecast) {
                    $date = date('Y-m-d', $forecast['dt']);
                    if (!in_array($date, $dates)) {
                        $dates[] = $date;
                        $temp = $forecast['main']['temp']-273;
                        $description = $forecast['weather'][0]['description'];
                        $icon = $forecast['weather'][0]['icon'];

                        echo "<div class='day'>";
                        echo "<p>Date: $date</p>";
                        echo "<p>Temperature: $temp °C</p>";
                        echo "<p>Description: $description</p>";
                        echo "<img src='http://openweathermap.org/img/w/$icon.png' alt='Weather Icon'>";
                        echo "</div>";
                    }
                }

                echo "</div>";
            } else {
                echo "City not found.";
            }
        }
        ?>

        <a href="index.html">Go back</a>
    </div>
</body>
</html>
