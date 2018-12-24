<?php
self::add('^(?P<controller>admin)/?(?P<action>[a-z-]+)/?(?P<param>[a-z-]+)?$', []);
self::add('^$', ['controller' => 'Main']);
self::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
