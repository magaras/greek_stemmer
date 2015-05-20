<?php
header('Content-Type: text/html; charset=ISO-8859-7');
?>
<html>
    <head>
        <title>Greek Stemmer</title>
        <meta charset="ISO-8859-7">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        
        <style>
            .table td th {
   text-align: center;   
}
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <h1>Greek Stemmer</h1>
                <p>Receives as input a text in Greek and stems its words. The stop-words are removed.</p>
                <p>The script can be used in text parsing related tasks.</p>
            </div>                
        </div>
        
        <div class="container">
            
            <div class="row">
                <div class="col-sm-4">
                    <h3><b>Initial Text</b></h3>
                    <p>Το παρόν κείμενο θα δοθεί για αποκατάληξη.</p>
                    <p>Καλώντας τον αποκαταληκτή δίνοντας ως όρισμα FALSE, τότε επιστρέφονται
                    οι πιο σημαντικές λέξεις του κειμένου, ενώ έχουν αφαιρεθεί τα ρήματα και τα άρθρα, 
                    ακολουθούμενες από τον αριθμό των εμφανίσεών τους (πρώτος πίναας).</p>
                    <p>Τα αποτελέσματα μπορούν να χρησιμοποιηθούν για αυτόματη αναγνώριση
                    της κατηγορίας του κειμένου ή για παράδειγμα εξαγωγή της περίληψής του. </p>
                    <p>Στη δεύτερη περίπτωση, δίνοντας ως όρισμα TRUE, επιστρέφονται όλες οι λέξεις του κειμένου, εκτός από τα άρθρα.</p>
                </div>
                <div class="col-sm-4">
                    <h3><b>Stemmed Words Occurrences</b></h3>
                    <?php
                        include 'mod_stemmer.php';
                        
                        $text_to_parse = "Το παρόν κείμενο θα δοθεί για αποκατάληξη.
                    Καλώντας τον αποκαταληκτή δίνοντας ως όρισμα FALSE, τότε επιστρέφονται
                    οι πιο σημαντικές λέξεις του κειμένου, ενώ έχουν αφαιρεθεί τα ρήματα και τα άρθρα, 
                    ακολουθούμενες από τον αριθμό των εμφανίσεών τους (πρώτος πίνακας).
                    Τα αποτελέσματα μπορούν να χρησιμοποιηθούν για αυτόματη αναγνώριση
                    της κατηγορίας του κειμένου ή για παράδειγμα εξαγωγή της περίληψής του.
                    Στη δεύτερη περίπτωση, δίνοντας ως όρισμα TRUE, επιστρέφονται όλες οι λέξεις του κειμένου, εκτός από τα άρθρα.";
                        
                        // Return the stemmed words with the occurrences of each word
                        $simple_stemmer = FALSE;
                        $stemmed_words = start($text_to_parse, $simple_stemmer);
                        echo "<table class='table table-condensed'><tr><th>Word</th><th>Occurences</th></tr>";
                        foreach($stemmed_words as $word=>$occurences)
                            echo "<tr><td>".$word."</td><td>".$occurences."</td></tr>";
                        echo "</table>";
                       ?>
                    </div>
                
                
                    <div class="col-sm-4">
                        <h3><b>Stemmed Words</b></h3>
                        <?php
                        
                        // Return all the stemmed words
                        $simple_stemmer = TRUE;
                        $stemmed_words = start($text_to_parse, $simple_stemmer);
                        echo "<table class='table table-condensed'><tr><th>Word</th></tr>";
                        foreach($stemmed_words as $word)
                            echo "<tr><td>".$word."</td></tr>";
                        echo "</table>";
                            
                        
                    ?>
                </div>
            </div>
        </div>
    </body>
    
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.1 -->
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</html>


