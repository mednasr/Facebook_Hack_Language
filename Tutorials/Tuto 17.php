<?hh

// Tuples represent fixed size arrays.
// TODO: fix the return type ' (int, bool) '.
function my_first_pair((int, bool) $pair): int {
  list($_, $result) = $pair;
  return $result;
}
