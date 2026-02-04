<?php
// ini data
$data = [
    ["name" => "John", "id" => "001", "score" => 100],
    ["name" => "Jane", "id" => "002", "score" => 84.3],
    ["name" => "Bob", "id" => "003", "score" => 70.3],
    ["name" => "Smith", "id" => "004", "score" => 60],
    ["name" => "Tom", "id" => "005", "score" => 90.5],
    ["name" => "Jack", "id" => "006", "score" => 68.9],
];
$grades = [];
$total = 0;

?>

<!-- ini fungsi grade -->
<?php


foreach ($data as $i => $student) {
    $score = $student["score"];

    if ($score >= 85) {
        $grade = "A";
    } elseif ($score >= 80) {
        $grade = "A-";
    } elseif ($score >= 75) {
        $grade = "B+";
    } elseif ($score >= 70) {
        $grade = "B";
    } elseif ($score >= 65) {
        $grade = "B-";
    } elseif ($score >= 60) {
        $grade = "C+";
    } elseif ($score >= 55) {
        $grade = "C";
    } elseif ($score >= 50) {
        $grade = "C-";
    } elseif ($score >= 40) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    $data[$i]["grade"] = $grade;
    $total += $student["score"];
}




?>

<!-- ini ngitung -->

<?php
$avg = $total / count($data);
?>

<!-- ini tabel -->
<?php
echo ("<div id = 'tab'>");
echo ("<table>");
echo ("<thead> <th>ID</th> <th>Name</th> <th>Score</th> <th>Grade</th></thead>");
foreach ($data as $std) {
    echo ("<tr>");
    echo ("<td>" . $std["id"] . "</td>");
    echo ("<td>" . $std["name"] . "</td>");
    echo ("<td>" . $std["score"] . "</td>");
    echo ("<td>" . $std["grade"] . "</td>");
    echo ("</tr>");
}
echo ("</table>");
echo ("<p><strong>average: {$avg}</strong></p>");
echo ("</div>");
?>


<!-- kedua woi -->

<!-- DATA KEDUA -->
<?php

$data = [
    "John;Male;CIT",
    "Jane;Female;CIT",
    "Jack;Male;CIS",
    "Claudia;Female;CIT",
    "Vera;Female;CIS",
    "Fransisca;Female;CIT",
    "Smith;Male;CIS",
    "Lyana;Female;CIT",
];
$result = [];
?>

<!-- LOGIC KEDUA -->
<?php
foreach ($data as $row) {
    [$name, $gender, $major] = explode(";", $row);

    $result[] = [
        "name"   => $name,
        "gender" => $gender,
        "major"  => $major
    ];
}


$male = 0;
$malestd = [];
$female = 0;
$femalestd = [];
$cit = 0;
$cis = 0;

foreach ($result as $student) {
    if ($student["gender"] === "Male") {
        $male++;
        $malestd[] = $student["name"];
    } else {
        $female++;
        $femalestd[] = $student["name"];
    }

    if ($student["major"] === "CIT") {
        $cit++;
    } else {
        $cis++;
    }
}



echo ("<div id='kedua'> <p>Male: {$male}</p>");
echo ("<p>Female: {$female}</p>");
echo ("<p>CIT: {$cit}</p>");
echo ("<p>CIS: {$cis}</p>");
echo ("<p> Male students: ");
foreach ($malestd as $smale) {
    echo ("{$smale}, ");
}
echo ("</p>");

echo ("<p> Female students: ");
foreach ($femalestd as $sfem) {
    echo ("{$sfem}, ");
}
echo ("</p>");

echo ("</div>")


?>

<!-- KETIGA MOK -->

<!-- DATA -->
<?php
$maxValue = 0;
$minValue = 0;
?>

<!-- LOGIC -->
<?php
function findMaxMin($number, &$max, &$min)
{
    if (empty($number)) {
        $number = [0];
        # code...
    }
    $max = max($number);
    $min = min($number);
};
?>
<?php
echo "<div class='flex'>";
$number = [9, 4, 2, 1, 5, 6, 3, 8, 7];
echo ("<div class='margin-top'>");
echo ("if number is [9, 4, 2, 1, 5, 6, 3, 8, 7]<br>");
findMaxMin($number, $maxValue, $minValue);

echo ("\n Max: $maxValue\n");
echo ("Min: $minValue\n");
echo ("</div>");

$number = [84.3, 100, 40.2];
echo ("<br><div class='margin-top'>");
echo ("if number is [84.3, 100, 40.2]<br>");
findMaxMin($number, $maxValue, $minValue);

echo ("\n Max: $maxValue\n");
echo ("Min: $minValue\n");
echo ("</div>");

$number = [];
echo ("<br><div class='margin-top'>");
echo ("if number is null or nothing<br>");
findMaxMin($number, $maxValue, $minValue);

echo ("\n Max: $maxValue\n");
echo ("Min: $minValue\n");
echo ("</div>");

echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex{
            display: flex;
            justify-self: center;
            width: 80vw;
            flex-direction: row;
            justify-content: space-evenly;
        }
        table {
            text-align: center;
            border: 1px black solid;
            border-collapse: collapse;
        }

        th {
            border: 1px black solid;
        }

        td {
            border: 1px black solid;
            padding: 2px;
        }

        #tab {
            border: 1px black solid;
            width: max-content;
            padding: 0.3rem;
        }

        #kedua {
            border: 1px black solid;
            padding: 0 1rem;
            width: max-content;
            margin-top: 1rem;
        }

        .margin-top {
            margin-top: 1rem;
            border: 1px black solid;
            width: max-content;
            padding: 1rem;
        }
    </style>
</head>

<body>

</body>

</html>