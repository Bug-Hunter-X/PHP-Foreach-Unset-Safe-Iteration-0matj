function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'something') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'something', 'b', 'something', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [2] => b [4] => c )

//This code will modify the original array in place. This can lead to unexpected behavior if the function is called multiple times or if the original array is used elsewhere in the code.

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

//This code will not modify the original array. It creates a new array with the elements that do not match the condition, leaving the original array unchanged. This is generally considered better practice and avoids unexpected side effects.