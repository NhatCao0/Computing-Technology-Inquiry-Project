<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="The Reel Room Enhancement">
    <meta name="keywords" content="Enhancement">
    <meta name="author" content="">
    <title>Enhancement</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

        <?php 
            include "includes/header.inc";
        ?>

    <H1 class="phong-h1">Enhancement page</H1>
    <br>
    <br>
    <br>
    <Br>
    <p class="phong-introduce">
        This page will list and show enhancements of our teams,which makes our assignment not only more creative but also more professional.These enhancements provide our teammate opportunity to discover more skills in HTML or CSS, learn new knowledge as well as create self-study and self-discovery spirit.
    </p>
    <p class="phong-introduce">
        This table below will demonstrate specifically our team enhancements:
    </p>
    <br>
    <br>
    <br>
    <Br>
        <!-- TABLE -->

    <div class="div-phong-table">
        <table class="phong-table">
        <thead>
            <tr class="phong-headtable">
                <th class="phong-thead">Enhancement</th>
                <th class="phong-thead">Usage</th>
                <th class="phong-thead">Code</th>
                <th class="phong-thead">Place applied in the website</th>
                <th class="phong-thead">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="phong-content">Invisible caption</th>
                <th class="phong-content">Show caption when mouse hover to the image</th>
                <th class="phong-content"> .caption {
                    visibility: none; opacity: 0;
                    transition: opacity 0.3s;
                }
                <br>
                .grid-item:hover .caption {
                    visibility: visible; opacity: 1;
                }</th>
                <th class="phong-content"><a href="product.html">invisible caption</a></th>
                <th class="phong-content">Reference<a href="https://code-boxx.com/text-over-image-hover-html-css/?fbclid=IwAR2nGQUZX-XNQylsO8Mjjp011CNxGBsiZ1K7xEfjWDAxGtjpMktI4CNkLj8"> Study link</a></th>

            </tr>
            <tr>
                <th class="phong-content">Flexible elements</th>
                <th class="phong-content">Elements adjust according to the size of the webpage</th>
                <th class="phong-content">
                    @media only screen and (max-width: 600px) {
                        .columns {
                        width: 100%;
                        }
                        <br>
                        .grid-container {
                            grid-template-columns: auto;
                        }
                    }
                    <Br>
                    @media only screen and (orientation: portrait) and (min-width: 600px) {
                        <br>
                        .grid-container {
                            grid-template-columns: auto auto;
                        }
                    }
                </th>
                <th class="phong-content"><a href="product.html"> flexible elements</a> </th>
                <th class="phong-content">Reference<a href="https://www.w3schools.com/cssref/css3_pr_mediaquery.php?fbclid=IwAR1w3pxEMXH_U2U1uhV3kmBVaovIPjJfzsvNRYSUw3R6LSH5dOHa3C4Fel4"> Study link</a></th>
            </tr>
            <tr>
                <th class="phong-content">Enhanced unordered list</th>
                <th class="phong-content">Turn unordered lists into tables </th>
                <th class="phong-content">.price-column {
                    float: left;
                    width: 33.3%;
                    padding: 8px;
                }
                <br>
                .price {
                    list-style-type: none;
                    border: 1px solid #eee;
                    margin: 0;
                    padding: 0;
                    -webkit-transition: 0.3s;
                    transition: 0.3s;
                }
            </th>
            <th class="phong-content"><a href="product.html">the price table</a></th>
            <th class="phong-content">Reference<a href="https://www.w3schools.com/howto/howto_css_pricing_table.asp?fbclid=IwAR0gyc8qCeQ_Nljln9bpU9LiKgY0f4a-k7uLglGwwDyzVhQkfTZGr9wH1p4"> Study link</a></th>
            </tr>
            <tr>
                <th class="phong-content">Zebra striped table</th>
                <th class="phong-content">present the table rows in alternating colours to make it more readable</th>
                <th class="phong-content">.table-row:nth-child(odd) {
                    background: rgba(143, 48, 48, 0.2);
                    }
                </th>
                <th class="phong-content"><a href="product.html">the zebra table</a></th>
                <th class="phong-content">Reference<a href="https://www.w3schools.com/howto/howto_css_table_zebra.asp?fbclid=IwAR2tDQ3PR1KhP3FuZOfOwwwAlrIkbGn90BUgl1wfFXezaTh1s9mHqXCWg3k"> Study link </a></th>
            </tr>
        </tbody>

        </table>
    </div>

        <?php 
            include "includes/footer.inc";
        ?>

  
</body>
</html>