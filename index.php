<?php



$servername = "localhost";

$username = "root";

$password = "";

$dbname = "test"; // Specify the database name




//create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


//check if the connection was  successful

if(!$conn){

   die("sorry, we failed to connect:". mysqli_connect_error());

}

//UPDATE query



// Define your' information
$Username = 'sreevalli';  // Replace with the student's username
$Email = 'student1@example.com';  // Replace with the student's email
$Password = 'password123';  // Replace with the student's password
$Submit = 'Some value';  // Replace with the student's submit value

// Select data from the "test" table (make sure this is the correct table name)//
$sql = "UPDATE `users` SET `Username`='[value-1]', `email`='[value-2]', `password`='[value-3]',`submit`='[value-4]'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Select the database (if needed for further queries)
mysqli_select_db($conn, $dbname);


//create db
$sql = "SELECT username, email, password, submit FROM users";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>Username</th><th>Email</th><th>Password</th><th>Submit</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["submit"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
?>