*******************REVERSE WORDS IN A STRING********************************
You need to write a function that reverses the words in a given string. A word can also fit an empty string. 
If this is not clear enough, here are some examples:
reverse("Hello World") === "World Hello"
reverse("Hi There.") === "There. Hi"
Happy coding!

function reverse($string) {
  $array = explode(" ", $string);
  $reversed = array_reverse($array);
  return implode(" ", $reversed);
}
