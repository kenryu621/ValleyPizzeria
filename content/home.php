<div id="content" class="scroll-container">
  <section>
    <div class="homeText">
      <h1>Get</h1>
      <h1>Incredible <span>Taste</span></h1>
      <div>
        <h1>with</h1>
        <h1>Every Bite</h1>
      </div>
      <h2>"We proudly bake and serve fresh, hot pizzas made only from the best ingredients. The combination of our hand-rolled, made daily dough, our special blend of cheeses, sauces and toppings ensure that you always receive incredible taste
        with every bite." -- Seng Kim, Founder of the Valley Pizzeria</h2>
    </div>
    <div class="homePic">
      <img src="IMG/food/homePizza.webp" alt="Pizza">
    </div>
  </section>
  <section>
    <div class="homeText" id="homePizza">
      <h1>Premium</h1>
      <h1>Pizza</h1>
      <h2>We serve fresh hot pizzas made with the best ingredients; Our special blended cheeses will bring out the incredible taste with every bite. Our dough is hand rolled fresh daily! Available on original thin crust and thick crust!</h2>
    </div>
    <div class="homePic">
      <img src="IMG/food/homeAppe.webp" alt="Wings">
    </div>
  </section>
  <section>
    <div class="homeText" id="homeApp">
      <h1>Appetizers</h1>
      <h2>Our wings, dressed in your favorite sauces and served with our homemade ranch, are sure to have you coming back for more! Regular wings come in three flavors: Sweet BBQ, Wings of Fire, and Buffalo.<br>For the kids, we have seasoned
        boneless wings as another option.</h2>
    </div>
    <div class="homePic">
      <img src="IMG/food/homeAppe.webp" alt="Wings">
    </div>
  </section>
  <section id="footer">
    <div class="homeText" id="homeBev">
      <h1>Beverages</h1>
      <h2>Pepsi, Coca Cola, Sprite, Beer, anything you want!<br>Small Soft Drinks are refillable.<br>Soft Drinks are for to go.<br>And 2-Liter Sodas are for to go or delivery only.</h2>
    </div>
    <div class="homePic">
      <img src="http://pngimg.com/uploads/cocacola/cocacola_PNG23.png" alt="">
    </div>
    <footer>Copyright &copy;
      <?php
        $fromYear = 2017;
        $thisYear = (int)date('Y');
        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
      ?>
      Designed by Valley Pizzeria. All rights reserved.
    </footer>
  </section>
</div>
</body>
<script src="library/full-page-scroll.js" charset="utf-8"></script>
<link rel="stylesheet" href="library/full-page-scroll.css">
<script type="text/javascript">
  var style = document.createElement('style');
  style.type = 'text/css';
  document.getElementsByTagName('head')[0].appendChild(style);

  function sectionHeight() {
    let navHeight = document.getElementById('nav').clientHeight;
    style.innerHTML = '.scroll-container section {padding-top: ' + navHeight + 'px; height: calc(100vh - ' + navHeight + 'px)}';
  }

  sectionHeight();

  new fullScroll({
    mainElement: 'content',
    displayDots: true,
    dotsPosition: 'right',
    animateTime: 1,
    animateFunction: 'ease'
  });
</script>

</html>
