<?php
$staff = [
    [
        "acedemic" =>
        [

            [
                "name" => "Ram thapa",
                "address" => "pokhaar",
                "mobile" => [464564564, 64364564],
                "subject" => ["english", "math"]
            ],
            [
                "name" => "Hari Thapa",
                "address" => "kathmandu",
                "mobile" => [9998898899, 99898],
                "subject" => ["c", "C++"]
            ],
            [
                "name" => "ram gurung",
                "address" => "pokhara",
                "mobile" => [465645, 4564564],
                "subject" => ["physic", "java"]
            ]
        ]
    ],
    [
        "nonacedemic" =>
        [

            [
                "name" => "Santosh regmi",
                "address" => "Lamachaur",
                "mobile" => [646651, 958151],
                "subject" => "none"
            ],
            [
                "name" => "narayan",
                "address" => "Birauta",
                "mobile" => [9800000000, 800000000],
                "subject" => "none"
            ],
        ]
    ]
];
// ....................Style...........................
echo "<h1>Gandaki College of Engineering and Science</h1>";
echo "<table border='1px solid black' cellspacing= '0px' cellpadding ='8px' width ='60%'>";
echo "<tr bgcolor = 'white' font-size='32px'>";
echo "<th>Name</th>";
echo "<th>Acedemic</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "<th>Subjects</th>";
echo "</tr>";

for ($i = 0; $i <= 1; $i++) {
    foreach ($staff[$i] as $option => $content) {
        if ($i) {
            for ($k = 0; $k <= 1; $k++) {
                
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"]) ? $test = "true" : $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for ($j = 0; $j < count($content[$k]["mobile"]); $j++) {
                    $temp .= $content[$k]["mobile"][$j] . "</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";

                echo "<td>None</td>";
                echo "</tr>";
            }
        } else {
            for ($k = 0; $k < 3; $k++) {
                
                $temp = $content[$k]["name"];
                echo "<td>$temp</td>";
                $test = is_array($content[$k]["subject"]) ? $test = "true" : $text = "false";
                echo "<td>$test</td>";
                $temp = " ";
                for ($j = 0; $j < count($content[$k]["mobile"]); $j++) {
                    $temp .= $content[$k]["mobile"][$j] . "</br>";
                }
                echo "<td>$temp</td>";
                $temp = $content[$k]["address"];
                echo "<td>$temp</td>";
                $temp = " ";
                for ($j = 0; $j < 2; $j++) {
                    $temp .= $content[$k]["subject"][$j] . "</br>";
                }
                echo "<td>$temp</td>";
                echo "</tr>";
            }
        }
    }
}
echo "</table>";
