<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $articles = $page->children()->visible()->flip();

  if (param("topic")) {
    $articles = $articles->filterBy('categories', param("topic"), ',');
  }
  if (param("lab")) {
    $articles = $articles->filterBy('Lab', param("lab"), ',');
  }
  
  // apply pagination
  $articles   = $articles->paginate(8);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination');

};