<?php
 $memcached = new Memcached();
 $memcached->setOption(Memcached::OPT_CLIENT_MODE, Memcached::DYNAMIC_CLIENT_MODE);
 $memcached->addServer('172.31.44.31', 11211);
 $memcached->set('key', 'value', 60);
 $memcached->set('tester', 'set tester...', 600);
 echo $memcached->get('tester');
?>