<footer class="foot">Copyright &copy;
  <?php
    $fromYear = 2017;
    $thisYear = (int)date('Y');
    echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
  ?>
  Designed by Valley Pizzeria. All rights reserved.
</footer>
</body>
<script>
var style = document.createElement('style');
style.type = 'text/css';
document.getElementsByTagName('head')[0].appendChild(style);

function sectionHeight() {
  let navHeight = document.getElementById('nav').clientHeight;
  style.innerHTML = '.content {padding-top: ' + navHeight + 'px;}';
}

sectionHeight();
</script>

</html>
