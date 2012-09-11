<?php
$dirs = scandir('./');
print('<ul>');
foreach($dirs as $dir) {
  if (is_dir($dir) && $dir != '.' && $dir != '..') {
    if ($handle2 = opendir($dir)) {
      print('<li>' . $dir . '<ul>');
      while (false !== ($entry2 = readdir($handle2))) {
        if (strpos($entry2, '.png')) {
          print '<li><a href="./' . $dir . '/' . $entry2 . '" target="content">' . $entry2. '</a></li>' . "\n";
        }
      }
      print('</ul></li>');
    }
  }
}
print('</ul>');
