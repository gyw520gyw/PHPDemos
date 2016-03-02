<html>
<body>

<?php
function writeName($fname,$punctuation)
{
echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName("Kai Jim",".");
echo "My sister's name is ";
writeName("Hege","!");
echo "My brother's name is ";
writeName("St?le","?");


function add($a, $b) {
	return $a+$b;
}

echo "result : ".  add(10, 20);
?>

</body>
</html>