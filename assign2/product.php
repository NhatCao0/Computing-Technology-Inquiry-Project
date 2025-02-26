<!DOCTYPE HTML> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="The Reel Room Product">
        <meta name="keywords" content="product">
        <meta name="author" content="">
        <link rel="stylesheet" href="styles/style.css">
        <title>PRODUCT</title>
    </head>
    <body class="dung-body">

        <?php 
            include "includes/header.inc";
        ?>

        <div id="dung">
        <h1> MOVIES THIS MONTH</h1>
        </div>

        <!-- POSTER -->
        <div class="grid-container">
            
            <figure>
            <div class="grid-item" >
                <img src="image/Midsommar.jpeg" alt="Midsommar poster" class="poster">
                <figcaption id="Midsommar">Midsommar</figcaption>
                <div class="caption"> 
                
                DIRECTED BY: ARI ASTER  <br><br>
                A couple travels to Northern Europe to visit a rural hometown's fabled Swedish mid-summer festival. What begins as an idyllic retreat quickly devolves into an increasingly violent and bizarre competition at the hands of a pagan cult

                </div>
            </div>
            </figure>

            <figure>
            <div class="grid-item">
                <img src="image/Wongkarwai.png" alt="In the Mood for Love poster" class="poster">
                <figcaption id="Inthemoodforlove">In the Mood for Love</figcaption>
                <div class="caption">
                
                DIRECTED BY : WONG KAR-WAI <br><br>
                Two neighbors form a strong bond after both suspect extramarital activities of their spouses. However, they agree to keep their bond platonic so as not to commit similar wrongs.

                </div>
            </div>
            </figure>

            <figure>
            <div class="grid-item">
                <img src="image/Onceuponatime.jpeg" alt="Once Upon a Time in Hollywood poster" class="poster">
                <figcaption id="Once">Once Upon a Time... in Hollywood</figcaption>
                <div class="caption"> 
                
                DIRECTED BY : QUENTIN TARATINO <br> <br>
                A faded television actor and his stunt double strive to achieve fame and success in the final years of Hollywood's Golden Age in 1969 Los Angeles.
                
                </div>
            </div>
            </figure>

            <figure>
            <div class="grid-item">
                <img src="image/Dune.png" alt="Dune poster" class="poster">
                <figcaption id="Dune">Dune</figcaption>
                <div class="caption"> 
                    
                DIRECTED BY : DENIS VILLENEUVE <br> <br>
                A noble family becomes embroiled in a war for control over the galaxy's most valuable asset while its heir becomes troubled by visions of a dark future.
                
                </div>
            </div>
            </figure>

            <figure>
            <div class="grid-item">
                <img src="image/Coraline.jpeg" alt="Coraline poster" class="poster">
                <figcaption id="Coraline">Coraline</figcaption>
                <div class="caption">
                    
                DIRECTED BY : HENRY SELICK <br> <br>
                An adventurous 11-year-old girl finds another world that is a strangely idealized version of her frustrating home, but it has sinister secrets.     
                
                </div>
            </div>
            </figure>

            <figure>
            <div class="grid-item">
                <img src="image/lostintranslation.jpeg" alt="Lost in Translation poster" class="poster">
                <figcaption id="Lost">Lost In Translation</figcaption>
                <div class="caption">
                    
                DIRECTED BY : SOFIA COPPOLA<br> <br>
                A faded movie star and a neglected young woman form an unlikely bond after crossing paths in Tokyo.    
                
                </div>
            </div>
            </figure>

        </div>
        <br><br><br>
        <hr class="dung-hr">
        <br><br>
        <!-- MOVIES SCHEDULE  -->
        <section>
            <h2> SCHEDULE </h2>
            <br>
            <table>
                <tr id="head-table">
                <th>Movie</th>
                <th>Date</th>
                </tr>
                
                <tr class="table-row">
                <td> 1. In the mood for love: <em>1h 38m</em> </td>
                <td>Friday (14/2): 20:00 - 21:40</td>
                </tr>

                <tr class="table-row">
                <td> 2. Midsommar: <em>2h 51m</em></td>
                <td>Satursday (15/2): 19:00 - 22:00 </td>
                </tr>

                <tr class="table-row">
                <td> 3. Once upon a time in Holywood: <em>2h 40m</em></td>
                <td>Sunday (16/2): 19:00 - 22:55</td>
                </tr>

                <tr class="table-row">
                <td> 4. Dune: <em>2h 36m</em> </td>
                <td>Friday (24/2): 19:00 - 21:45 </td>
                </tr>

                <tr class="table-row">
                <td> 5. Coraline: <em>1h 40m</em> </td>
                <td>Saturday (25/2): 18:00 - 20:00</td>
                </tr>

                <tr class="table-row">
                    <td> 6.Lost in Translation: <em>1h 42m</em> </td>
                    <td>Sunday (26/2): 18:00 - 20:00 </td>
                    </tr>
            </table>
        </section>

        <br><br>
        <hr class="dung-hr">
        <br><br>

        <!-- PRICE TABLE -->
        <section class="dung-price-section">
        <h2> TICKET </h2>
        <br>

        <div class="price-column">
        <ul class="price">
            <li id="header-single" class="header">Single</li>
            <li class="grey"> 100 000 VND</li>
            <li class="dung-price-info">1 ticket</li>
            <li class="dung-price-info"> 1 optional drink</li>
            <li class="dung-price-info"> A random gift </li>
        </ul>
        </div>

        <div class="price-column">
        <ul class="price">
            <li id="header-couple" class="header">Couple Combo</li>
            <li class="grey"> 175 000 VND</li>
            <li class="dung-price-info"> 2 tickets </li>
            <li class="dung-price-info"> 2 optional drinks</li>
            <li class="dung-price-info"> 2 random gift </li>
        </ul>
        </div>

        <div class="price-column">
        <ul class="price">
            <li id="header-family" class="header"> Family Combo</li>
            <li class="grey"> 350 000 VND </li>
            <li class="dung-price-info"> 4 tickets</li>
            <li class="dung-price-info"> 4 optional drinks</li>
            <li class="dung-price-info"> 4 random gift </li>
        </ul>
        </div>
        
        <br><br><br><br>
        
        <hr class="dung-hr">
        <!-- FOOD LIST -->
        <br><br> 


        <h2> FOODS AVAILABLE (OFFLINE)</h2>
        <br>
      
        <div class="food-column">
        <ol>
            <li>Popcorn (size:S,M,L)</li>
            <li>Snacks</li>
            <li>Candy</li>
            <li>Hot dogs</li>
            <li>Adult beverage </li>
            <li> A range of soda options</li>
            
        </ol>
        </div>


            <aside>
               The prices are all under 50K!
            </aside>
        
       
        </section> 

        <br><br>

        <?php 
            include "includes/footer.inc";
        ?>
 
    </body>
</html>
