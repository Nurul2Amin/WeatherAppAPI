🌦️ Weather App
A simple web-based weather forecast app built using PHP, HTML, CSS, and the OpenWeatherMap API. Users can enter a city name to view a 5-day weather forecast including temperature, description, and weather icons.

🚀 Features
Search weather forecasts by city

5-day forecast with daily summaries

Real-time data from OpenWeatherMap API

Clean and responsive user interface

Temperature displayed in Celsius

🛠 Technologies Used
PHP

HTML5 & CSS3

OpenWeatherMap API

📦 Setup Instructions
Clone or download this repository to your local machine.

Make sure you have a local server environment set up (e.g., XAMPP, WAMP, or MAMP).

Place the project files in your web server's htdocs or equivalent directory.

Open the index.html file in your browser via the local server.

Enter a city name and click "Get Weather" to see the forecast.

🔑 API Key
This project uses a demo API key from OpenWeatherMap. To avoid rate limits or get more detailed data:

Sign up at https://openweathermap.org/api

Replace the API key in get_weather.php: $apiUrl = "http://api.openweathermap.org/data/2.5/forecast?q=$city&appid=YOUR_API_KEY";

