<?php
# Initialize Variables
$teamName = "Group 4 (D)";
$groupMember = array(
    "21910190" => "Amir Alatrash",
    "21910124" => "Ameer Rishmawi",
    "21910289" => "Renad Zboon",
    "21920004" => "Dana Nofal"
);
date_default_timezone_set('Asia/Jerusalem'); # Set the default timezone to Jerusalem
$current_date = date('m/d/Y'); # Month / Day / Year
$current_time = date('h:i:sa'); # Hour : Minutes : Seconds AM/PM
echo "<h1>" . "Multiplication Table by " . $teamName . "</h1>"; // Print the title and group name
echo "<h3>" . "Our Group Members Are: " . $groupMember[21910190] . " | " . $groupMember[21910124] . " | " . $groupMember[21910289] . " | " . $groupMember[21920004] . "</h3>"; //Array the group members
echo "Current Date: " . $current_date . ", Current Time: " . $current_time . "."; // Display Current date and time

// We want to use custom stylsheet for the table
echo "<style>";
echo "tr:first-child {";
echo "background-color: #00ad73!important;";
echo "color: #fff;";
echo "font-weight: bold;";
echo "}";

echo "tr:nth-child(odd) {";
echo "background: #f2f2f2;";
echo "}";

echo "</style>";
echo "<table border ='1' width=70% height=60% style='border-collapse: collapse; border-color: #ccc; text-align: center;'>"; //We do not want to loop the table


for ($row = 0;$row <= 9;$row++) // First Loop

{
    $value = 1; // First Row Values
    echo "<tr>"; // Table row element starts here
    if ($row == 0) { // Please Print X on the top corner
        echo "<td>X</td>";
    }

    else {
        $value = $row - 0;
        echo "<td style='background-color: #00ad73; color: #fff; font-weight: bold;'>$value</td>"; // First Column, We want to give the first column a background color
    }

    for ($col = 1;$col <= 9;$col++) { // Second Loop, Start from 1, we dont want another column with zero's
        echo "<td>" . $value * $col . "</td>"; // Please print table data and its values
    }

    echo "</tr>"; // Table row element ends here
    
}

echo "</table>";

?>
