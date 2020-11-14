<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$n = $_POST['n'];

$arrayAritmatika1 = [1 => $a, 2 => $b, 3 => $c, 4 => $d, 5 => $e];

for ($i = 2; $i < $n; $i++) { 
	 ${"arrayAritmatika$i"} = [];
}

for ($i = 1; $i <= $n; $i++) { 

	if ($i >= 6) {
		$sama1 = true;
		
		for ($j = 2; $j < (count($arrayAritmatika2)); $j++) { 

			if ($arrayAritmatika2[$j] != $arrayAritmatika2[$j - 1]) {
				$sama1 = false;
			}
		}

		if ($sama1) {
			$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)]; 
		} else {
			$sama2 = true;

			for ($j = 2; $j < (count($arrayAritmatika3)); $j++) { 

				if ($arrayAritmatika3[$j] != $arrayAritmatika3[$j - 1]) {
					$sama2 = false;
				}
			}
			
			if ($sama2) {
				$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)]; 
			} else {
				$sama3 = true;

				for ($j = 2; $j < (count($arrayAritmatika4)); $j++) { 

					if ($arrayAritmatika4[$j] != $arrayAritmatika4[$j - 1]) {
						$sama3 = false;
					}
				}

				if ($sama3) {
					$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)] + $arrayAritmatika4[count($arrayAritmatika4)]; 
				} else {
					$sama4 = true;

					for ($j = 2; $j < (count($arrayAritmatika5)); $j++) { 

						if ($arrayAritmatika5[$j] != $arrayAritmatika5[$j - 1]) {
							$sama4 = false;
						}
					}

					if ($sama4) {
						$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)] + $arrayAritmatika4[count($arrayAritmatika4)] + $arrayAritmatika5[count($arrayAritmatika5)]; 
					} else {
						$sama5 = true;

						for ($j = 2; $j < (count($arrayAritmatika6)); $j++) { 

							if ($arrayAritmatika6[$j] != $arrayAritmatika6[$j - 1]) {
								$sama5 = false;
							}
						}

						if ($sama5) {
							$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)] + $arrayAritmatika4[count($arrayAritmatika4)] + $arrayAritmatika5[count($arrayAritmatika5)] + $arrayAritmatika6[count($arrayAritmatika6)]; 
						} else {
							$sama6 = true;

							for ($j = 2; $j < (count($arrayAritmatika7)); $j++) { 

								if ($arrayAritmatika7[$j] != $arrayAritmatika7[$j - 1]) {
									$sama6 = false;
								}
							}

							if ($sama6) {
								$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)] + $arrayAritmatika4[count($arrayAritmatika4)] + $arrayAritmatika5[count($arrayAritmatika5)] + $arrayAritmatika6[count($arrayAritmatika6)] + $arrayAritmatika7[count($arrayAritmatika7)]; 
							} else {
								$sama7 = true;

								for ($j = 2; $j < (count($arrayAritmatika8)); $j++) { 

									if ($arrayAritmatika8[$j] != $arrayAritmatika8[$j - 1]) {
										$sama7 = false;
									}
								}

								if ($sama7) {
									$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)] + $arrayAritmatika4[count($arrayAritmatika4)] + $arrayAritmatika5[count($arrayAritmatika5)] + $arrayAritmatika6[count($arrayAritmatika6)] + $arrayAritmatika7[count($arrayAritmatika7)] + $arrayAritmatika8[count($arrayAritmatika8)]; 
								} else {
									$sama8 = true;

									for ($j = 2; $j < (count($arrayAritmatika9)); $j++) { 

										if ($arrayAritmatika9[$j] != $arrayAritmatika9[$j - 1]) {
											$sama8 = false;
										}
									}

									if ($sama8) {
										$arrayAritmatika1[$i] = $arrayAritmatika1[$i - 1] + $arrayAritmatika2[count($arrayAritmatika2)] + $arrayAritmatika3[count($arrayAritmatika3)] + $arrayAritmatika4[count($arrayAritmatika4)] + $arrayAritmatika5[count($arrayAritmatika5)] + $arrayAritmatika6[count($arrayAritmatika6)] + $arrayAritmatika7[count($arrayAritmatika7)] + $arrayAritmatika8[count($arrayAritmatika8)] + $arrayAritmatika9[count($arrayAritmatika9)]; 
									}
								}
							}
						}
					}
				}
			}
		}
	}

	for ($j = 1; $j < $n; $j++) { 
		$x = $j + 1;

		if ($i > $j) {
			${"arrayAritmatika$x"}[$i - $j] = ${"arrayAritmatika$j"}[$i - ($j - 1)] - ${"arrayAritmatika$j"}[$i - $j];
		}
	}
}

// for ($i = 1; $i < $n; $i++) { 
// 	echo "<pre>";
// 	print_r(${"arrayAritmatika$i"});
// }

echo "Nilai ke 6 : $arrayAritmatika1[6]<br>
Nilai ke $n : $arrayAritmatika1[$n]<br>";

?>