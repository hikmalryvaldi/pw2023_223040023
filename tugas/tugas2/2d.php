<style>
		table {
			border: 1px solid black;
		}

		td {
			width: 50px;
			height: 50px;
          
		}

		.hitam {
			background-color: black;
		}

		.putih {
			background-color: #fff;
		}
	</style>


<?php

$ukuran = 5;

echo "<table>";

for ($i = 1; $i <= $ukuran; $i++) {
	echo "<tr>";

	for ($j = 1; $j <= $ukuran; $j++) {
		$sel = " ";
		if (($i + $j) % 2 == 0) {
			$warna = "hitam";
		} else {
			$warna = "putih";
		}
		echo "<td class='" . $warna . "'>" . $sel . "</td>";
	}

	echo "</tr>";
}

echo "</table>";

?>
