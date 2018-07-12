<?php ## Стандартное поведение foreach.
  class Monolog
  {
    public    $first  = "It's him.";
    protected $second = "The Anomaly.";
    private   $third  = "Do we proceed?";
    protected $fourth = "Yes.";
    private   $fifth  = "He is still...";
    public    $sixth  = "...only human.";
  }
  $monolog = new Monolog();
  echo "<h3>Выводим:</h3> <br />";
  foreach ($monolog as $k => $v) {
    echo "<br />$k: $v<br>";
  }
  echo "<h3>Конец вывода....</h3> <br />";
  echo "<h3>Начало вывода № 2....</h3> <br />";
    echo "<h3>Выводим 2:</h3> <br />";
    foreach ($monolog as $k => $v) {
        echo "<br />$k: $v<br>";
    }

?>