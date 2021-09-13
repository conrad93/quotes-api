<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes API</title>
    <?php include ('headerLinks.php'); ?>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Quotes API</h1>
        <p>This is a simple API with collection of 50+ quotes for free!</p>
        <p>Quotes can be queried from any of the following; all quotes, random or quote of the day.</p>
        <div class="row mb-3">
            <div class="col-12 p-3">
                <div class="card text-center">
                    <div class="card-header">
                        <h6>Today's Quote</h6>
                    </div>
                    <div class="card-body">
                    <figure>
                        <blockquote class="blockquote">
                            <p></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title"></cite>
                        </figcaption>
                    </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 p-3">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="badge bg-primary me-2">GET</span> /getAllQuotes.php
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gets all quotes.</p>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">URL - /getAllQuotes.php</li>
                                    <li class="list-group-item">METHOD - GET</li>
                                    <li class="list-group-item">
                                        RESPONSE - 
                                        <pre>{</pre>
                                        <pre> status: boolean,</pre>
                                        <pre> data: [</pre>
                                        <pre>  {</pre>
                                        <pre>   author: string,</pre>
                                        <pre>   id: string,</pre>
                                        <pre>   quote: string</pre>
                                        <pre>  }</pre>
                                        <pre> ]</pre>
                                        <pre>}</pre>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="badge bg-primary me-2">GET</span> /getRandomQuote.php
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gets a random quote.</p>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">URL - /getRandomQuote.php</li>
                                    <li class="list-group-item">METHOD - GET</li>
                                    <li class="list-group-item">
                                        RESPONSE - 
                                        <pre>{</pre>
                                        <pre> status: boolean,</pre>
                                        <pre> data: [</pre>
                                        <pre>  {</pre>
                                        <pre>   author: string,</pre>
                                        <pre>   id: string,</pre>
                                        <pre>   quote: string</pre>
                                        <pre>  }</pre>
                                        <pre> ]</pre>
                                        <pre>}</pre>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="badge bg-primary me-2">GET</span> /getTodaysQuote.php
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gets a quote for the day.</p>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">URL - /getTodaysQuote.php</li>
                                    <li class="list-group-item">METHOD - GET</li>
                                    <li class="list-group-item">
                                        RESPONSE - 
                                        <pre>{</pre>
                                        <pre> status: boolean,</pre>
                                        <pre> data: [</pre>
                                        <pre>  {</pre>
                                        <pre>   author: string,</pre>
                                        <pre>   id: string,</pre>
                                        <pre>   quote: string</pre>
                                        <pre>  }</pre>
                                        <pre> ]</pre>
                                        <pre>}</pre>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include ('footer.php'); ?>
    <?php include ('scriptTags.php'); ?>
    <script src="./js/main.js"></script>
</body>
</html>
