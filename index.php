<?php


$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

echo "<select>";
for($i = 0; $i < count($states); $i++) {
    echo "<option>" . $states[$i] . "</option>";
}
echo "</select>";

echo "<hr />";

echo "<select>";

foreach($states as $state) {
    echo "<option>" . $state . "</option>";
}
echo "</select>";

array_push($states, 'NJ', 'NY', 'DE');

echo "<hr />";
echo "<select>";

foreach($states as $state) {
    echo "<option>" . $state . "</option>";
}
echo "</select>";