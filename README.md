# Greek Stemmer

A Greek Stemmer written in PHP.

The stemmer receives a text in greek and returns the stemmed words in the following
two ways:
* By supplying the argument TRUE (simple stemmer), the stemmer parses all the words of the text and return their stems.
* By supplying the argument FALSE, the stemmer excludes the verbs and the Stop Words. The stemmed words returned are the most valuable for the text.


To use the stemmer just call the start function.
      $text_to_stem = ".....";
      $simple_stemmer = FALSE; // OR TRUE
      $stemmed_words = start($text_to_stem, $simple_stemmer);


In case the simple_stemmer is TRUE, a simple array is returned.
In case the simple_stemmer is FALSE, an associative array is returned. Each stemmed word is the key of the array and the occurrences of the word is the element's value.
