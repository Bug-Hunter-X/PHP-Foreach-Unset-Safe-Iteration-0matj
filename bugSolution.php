function foo2(array $arr) {
    $newArray = [];
    foreach ($arr as $key => $value) {
        if ($value !== 'something') {
            $newArray[] = $value;
        }
    }
    return $newArray;
}

$arr = ['a', 'something', 'b', 'something', 'c'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [2] => c )