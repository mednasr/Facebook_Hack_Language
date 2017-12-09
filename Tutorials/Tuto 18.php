<?hh

// Shapes can be used for arrays with constant string keys.
type my_shape = shape(
  'field1' => int,
  'field2' => bool,
);

  // TODO: set 'field2' to the value true ' $result = shape('field1' => 1,'field2' => true) '
  // on $result to complete the shape.

function first_shape(): my_shape {
  $result = shape('field1' => 1);

  return $result;
}
