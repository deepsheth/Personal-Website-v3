<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
	================================================== -->
    <meta charset="UTF-8">
    <title>Software Development | Deep Sheth</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />

    <!-- Meta Info
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Deep Sheth">

    <!-- Analytics
	================================================== -->

    <!-- CSS
	================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Rajdhani:700|Roboto+Slab:400,700|Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../style.css">

    <!-- JavaScript
	================================================== -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->

</head>

<body>
    <?php include '../partials/header.php'; ?>

        <img class="full-width" src="./pic/Tree.jpg">

        <section id="main-content">
            <div class="post-title">
                <h1>Software Development</h1>
                <ul class="post-info">
                    <li>Deep Sheth</li>
                    <li>Jan. 1, 2016</li>
                </ul>
            </div>

            <div class="container">
                <h2>Compilers & Assemblers</h2>
                <p>
                    Last semester at Lehigh, I took a Systems Software course <a href="">(CSE 109)</a>. One of the main goals in this course is to explore how computers "understand" programming languages. I developed a compiler for a simplified high-level language. The compiler tokenizes and parses the pseudo language. Once the parser successfully runs, the compiler outputs SASM assembly code in a new file. On top of this, I developed an assembler which takes the SASM assembly code and converts it to machine code (hexadecimal values were used instead of binary values).
                </p>

                <div class="row content-footer">
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="#" target="_blank">
                                <div class="card-footer">
                                    Compiler
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <a href="#" target="_blank">
                                <div class="card-footer">
                                    Assembler
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <h2>Trie</h2>
                <p>
                    Tries are a useful data structure for storing dictionray terms, since it is very efficient to look up/retrieve words. Each node in my Trie data structure holds up to 10 links. Links hold individual letters, and nodes have a property which indicates if it's the end of a word. This design allows for compound words to be stored and retrieved. For example, if <strong>POPCORN</strong> is stored into the trie, and then <strong>POP</strong> is inserted, new links are <em>not</em> created when <strong>POP</strong> is inserted. However, since nodes indicate that the last "P" in <strong>POP</strong> is the end of a word, <strong>POP</strong> can be retrieved. In addition to holding links, nodes (specifically end nodes) hold an integer value that needs to be passed when inserting a word.
                </p>

                <div class="row content-footer">
                    <div class="col-sm-5">
                        <div class="card">
                            <a href="#" target="_blank">
                                <div class="card-footer">
                                    Trie Data Structure
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <h2>Spell Checker</h2>

                <p>
                    Spell checkers that offer suggestions to misspelled words should take the pronouncation of letters into account. This is important because words that are spelled differently may still have the same pronounciation, causing confusion which leads to typos. By using the Soundex algorithm to map letters phonetically, my Spell Checker program provides phonetic based suggestions. In addition, like you would expect, the Spell Checker suggests words very similar to the misspelled word. 
                </p>
                
                <p>
                    Before provding any suggestions to a typo, my program ranks the phonetically similar and similar spelled words based on my algorithm. The program narrows down to about 20 similar words and sorts the suggestions based on an algorithm that gives each word a confidence level. The top five words with the highest confidence rank are outputted as suggestions to the user. Fewer (or none) words may be suggested to the user if the confidence level of a word does not meet the minimum threshold. Therefore, for completely random words like "zyuilp", the Spell Checker will not provide any suggestions.
                </p>

                <div class="row content-footer">
                    <div class="col-sm-5">
                        <div class="card">
                            <a href="#" target="_blank">
                                <div class="card-footer">
                                    Download Spell Checker
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <h2>Poker Hand Ranker</h2>
                <p>
                    Players who are new to poker may need help understanding the different types of hands in poker, and which hand in poker is ranked higher. This program makes it easy for a player to input their hand of 5 cards, and then the program outputs the rank of their cards (ex. Royal Flush).
                </p>

                <div class="row content-footer">
                    <div class="col-sm-6">
                        <div class="card">
                            <a href="#" target="_blank">
                                <div class="card-footer">
                                    Download Poker Hand Ranker
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>





        <?php include '../partials/footer.php'; ?>
</body>

</html>