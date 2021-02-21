# Hash Table

In programming language, a hash table is a data structure which is used to make an array associative. It means we can use keys to map values instead of using an index. A hash table must use a hash function to compute an index into an array of buckets or slots, from which the desired value can be found

We can directly invoke any elements of an array with corresponding keys with only **O(1)** complexity. The key will always refer to the same index inside the bucket i.e. `$array[INDEX]`