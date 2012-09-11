# Simple file browser
## Purpose
This is a simple and focused utility to list the contents of a directory.
The top level of the directory is expected to be only more directories.
The next level is expected to be only PNGs.

## Usage
Place these three files in the web-accessibly directory you would like to list.
Visit browse.html in a web browser.

## Example (expected) directory structure
- browse.html
- browse-list.php
- browse-blank.html
- directory-one
  - file-1.png
  - file-2.png
  - file-3.png
- directory-two
  - file-1.png
  - file-2.png
  - file-3.png

## Security
This utility does not do any access checks on its own. But standard web server
security such as .htaccess rules and filesystem control will still be in effect.
This utility only lists files and provides links, so if your web server blocks
access to a file, this script will not give access. At most, it would show the
file name.

If you need something more robust, there are many file browser utilities
available for free.
