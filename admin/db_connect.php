<?php 

$conn = @new mysqli('localhost', 'root', '', 'masar_flights_db');
if ($conn->connect_error) {
    // Fallback to flight_booking_db if not yet migrated
    $conn = @new mysqli('localhost', 'root', '', 'flight_booking_db');
    if ($conn->connect_error) {
        die("Could not connect to mysql: " . $conn->connect_error);
    }
}
