$(function() {
    var availableTags = [
        "Bidon",
        "Machin",
        "Bidule",
        "BASIC",
        "BASIC2",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $( "#search" ).autocomplete({
        source: availableTags,
        minLength:0
    }).bind('focus', function(){ $(this).autocomplete("search"); } );
    $('#search').trigger("focus"); 
});

