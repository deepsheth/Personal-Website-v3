<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
	================================================== -->
    <meta charset="UTF-8">
    <title>Word Chain Solver | Deep Sheth</title>
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

        <img class="full-width" src="./pic/Words.jpg">

        <section id="main-content">
            <div class="post-title">
                <h1>Word Ladder Solver</h1>
                <ul class="post-info">
                    <li>Deep Sheth</li>
                    <li>Dec. 15, 2015</li>
                </ul>
            </div>

            <div class="container">
                <p class="lead">
                    Word Ladder is a simple puzzle game that tries to make you solve this question: If you are given a <em>start word</em> and <em>end word</em>, is it possible to manipulate the <em>start word</em> one letter at a time until it eventually spells the <em>end word</em>? For example, if the start word is <strong>MILK</strong> and end word is <strong>TUBE</strong>, can you change the start word and it's derivatives to eventually spell <strong>TUBE</strong>?
                </p>
                <h2>Solving the Problem</h2>
                <p>
                    I developed a Word Ladder Solver which answers this question for any given pair of start/end words. There are three different components to the final algorithm. The program's first priority is effiency. So, the program picks letters from the end word and tries to find valid english words one letter off from the previous word in the current chain. If the program finds itself at a dead end (no letters from the end word create a valid english word one letter off from the current word), then the program picks a new, <em>valid word</em> from the dictionary in history chain (a word that is one letter off from the current word that has not been used before is considered a <em>valid word</em>). For the worst cases, the program might find itself at a dead-end, after it cannot find anymore <em>valid words</em> in the dictionary. To account for these cases, the program will traverse back in the history chain until it finds a new <em>valid word</em> that does not result in a dead-end.
                </p>
                <p>
                    According to a <a href="http://blog.wolfram.com/2012/01/11/the-longest-word-ladder-puzzle-ever/">Wolfram Alpha</a> blog, the word pair that results in the longest word chain is: <strong>CHARGE</strong> (start word) & <strong>COMEDO</strong> (end word). As of now, my program has worked for every test case, including this one.
                </p>
                
                <div class="row content-footer">
                    <div class="col-sm-6">
                        <div class="card">
                            <a href="#" target="_blank">
                                <div class="card-footer">
                                    Download Word Ladder Solver
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