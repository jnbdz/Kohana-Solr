Kohana-Solr
===========

A Kohana module for the Apache Solr search platform.

How to use
----------

All the methods are static.

To initialize Solr with the configurations: 
    SOLR::init();

To query: 
    SOLR::q($query, $start, $rows);

Add fields: 
    SOLR::addFields(array($name => $value));
