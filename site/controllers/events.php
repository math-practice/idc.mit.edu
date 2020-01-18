<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $articles = $page->children()->visible()->flip();
  
  $timestamp = strtotime("today", time());
  $articles = $articles->filterBy('date', '<', $timestamp);

  // apply pagination
  $articles   = $articles->paginate(8);
  $pagination = $articles->pagination();

  return compact('articles', 'tags', 'tag', 'pagination');

};