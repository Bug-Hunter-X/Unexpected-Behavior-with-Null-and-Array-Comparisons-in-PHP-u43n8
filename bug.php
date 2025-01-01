function my_function($arg) {
  if ($arg === null) {
    return null;
  } else if (is_array($arg)) {
    // Handle array case
  } else if (is_string($arg)) {
    // Handle string case
  } else {
    // Handle other cases
  }
}