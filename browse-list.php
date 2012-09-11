<?php
$dirs = scandir('./');
print('<ul>');
foreach($dirs as $dir) {
  if (is_dir($dir) && $dir != '.' && $dir != '..') {
    if ($files = scandir($dir)) {
      print('<li>' . $dir . '<ul>');
      foreach($files as $file) {
        if (strpos($file, '.png')) {
          print '<li><a href="./' . $dir . '/' . $file . '" target="content">' . $file. '</a></li>' . "\n";
        }
      }
      print('</ul></li>');
    }
  }
}
print('</ul>');
