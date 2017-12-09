<?hh

/* Hack errors come in multiple parts.
 * Hover over the underlined parts!
 */

function add_one(int $x): int {
  return $x+1;
}

function test(): void {
  $my_string = 'hello';

  // Some clever code ...

  add_one($my_string);
}
