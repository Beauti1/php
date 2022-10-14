<?php
    include ('dbcon.php');
    $sql = "SELECT * FROM finfo";
    if($result = $con->query($sql))
    {
        if($result->num_rows > 0)
        {
            echo '<table>';
            echo "<thead>";
            echo "<tr>";
                echo "<th>Roll no</th>";
                echo "<th>Name</th>";
                echo "<th>Course</th>";
                echo "<th>Semester</th>";
                echo "<th>Contact</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = $result->fetch_array())
            {
                echo "<tr>";
                    echo "<td>" . $row['rollno'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td>" . $row['semester'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "</tr>";
            }
        echo "</tbody>";                            
        echo "</table>";
        $result->free();
        }
        else
        {
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } 
    else
    {
        echo "Oops! Something went wrong. Please try again later.";
    }

$con->close();
?>