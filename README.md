# PHP Unset() in Foreach Loop Bug

This repository demonstrates a common, but subtle, bug in PHP when using the `unset()` function within a `foreach` loop to modify arrays.  The problem arises because `unset()` modifies the array in place, affecting the loop's iteration. This can lead to unexpected behavior and skipped elements.

**The Bug:**
The provided code shows how using `unset()` directly within a `foreach` loop can lead to incorrect results due to the modification of the array structure during iteration. The solution demonstrates the safer alternative.

**The Solution:**
The solution avoids modifying the original array, providing a more robust and predictable outcome by creating a new array containing only the desired elements. This method prevents unintended side effects.