<?php
$conn = new COM("ADODB.Connection") or die("ADODB Oops!");
$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)};DBQ=C:\wamp64\www\Grading_System\Database\GradingOnline.mdb");
$data = $conn->Execute("SELECT * FROM myTable ORDER BY users ASC");

print "<TABLE border='1'><TR><TD colspan='6'>DATA</TD><TR>";
while (!$data->EOF)
{
print "<tr>";
print "<td>" . $ data ->Fields[0]->value . " </td>";
print "<td>" . $ data ->Fields[1]->value . " </td>";
print "</tr>";
$ data ->MoveNext();
}
echo "</TABLE>";