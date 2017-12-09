<?hh

// Hack uses generics for Collection types.

// TODO: fix the return type of the function 'test' and make it ' int '
function test(): Vector<string> {
  $vector = Vector {1, 2, 3};
  return $vector;
}
