<?hh

// When a type is too long, you can use a type alias.
type Matrix<T> = Vector<Vector<T>>;

function first_row<T>(Matrix<T> $matrix): Vector<T> {
  return $matrix[0];
}
