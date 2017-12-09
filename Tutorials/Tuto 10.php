<?hh

/**
 * Congratulations!
 * You completed the beginner's tutorial.
 * Expert mode is next
 *
 */

// All the members of a class must be initialized

class Point {

  private float $x;
  private float $y;

  public function __construct(float $x, float $y) {
    $this->x = $x;
    // FIXME: initalize the member 'y' with ' $this->y = $y; '
  }

}
