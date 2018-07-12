<?php ## Соединение с memcached
  $m = new Memcached();
  $m->addServer('localhost', 11211);
  error_get_last();
  echo 'Вывод 2-х данных!';
?>