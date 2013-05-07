Zettel - Very Simple Sticky Notes Tool with jquery/ajax/php/sqlite
==================================================================

* Draggable
* Resizable
* Write in Markdown, uses (https://github.com/chjj/marked)
* Save on Blur
* Unsecure
* Still alpha

## Warning

Don't use this on a production server, if you do,
at least secure it with .htaccess Password.
It's just a small demo yet.

## Requirements

* Web Server with php and sqlite module

## Install

* upload the files to a directory under your webserver root
* make sure the directory is writeable for the web server for the sqlite database file



## Coming soon:

* Zettel.coffee (now on devel branch)

## Planned Improvements

* save z-index
* ajax/json HTTP 1.1 instead of POST (?)
* local storage + optional cloud service
* auto save after time (now only on textarea.focusout)
* change colors, colorpicker
* multi desks/ categories
* headers
* add/ delete notes
* zoom in-> detail view; zoom out-> pin board view
* keyboard shortcuts/ completion
* ...
