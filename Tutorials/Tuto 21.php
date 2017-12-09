<?hh

/* Opaque types let you hide the representation of a type.
 *
 * The definition below introduces the new type 'user_id'
 * that will only be compatible with 'int' within this file.
 * Outside of this file, 'user_id' becomes "opaque"; it won't
 * be compatible with 'int' anymore.
 */
newtype user_id = int;

function make_user_id(int $x): user_id {
  // Do some checks ...
  return $x;
}

// You should only use this function for rendering
function user_id_to_int(user_id $x): int {
  return $x;
}
