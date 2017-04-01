<?php
$dash = array("<p>Within MSHN, 12 of the 21 Counties have a HIGHER percentage of individuals eligible to receive Medicaid Services than the State average.*</p><p class='source'>*Based on most recent MDCH Fingertip Report – 2010, and before the implementation of Medicaid expansion under <em>Healthy Michigan</em>.</p>", 
"<p>If you removed the Metro Region (Detroit/Wayne, Macomb and Oakland), 14 of the 21 MSHN counties have a HIGHER percentage of persons eligible to receive Medicaid services than the Michigan average.*</p><p class='source'>*Based on most recent MDCH Fingertip Report – 2010, and before the implementation of Medicaid expansion under <em>Healthy Michigan</em>.</p>",
"<p>MSHN’s population is 16.6% of the State’s population, and has almost the same percentage of the State’s Medicaid Eligible individuals: 16.3%.</p>",
"<p>Within MSHN, it is estimated that 4400 individuals currently receiving services financed by the State General Fund will be eligible for Medicaid under Healthy Michigan (MACMHB, 2014).</p>");
$dashPick = mt_rand(0,3);
echo $dash[$dashPick]
?>