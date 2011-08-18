<?php defined('SYSPATH') or die('No direct script access.');
/**
* Solr
*
* @package        Solr
* @author         Jean-Nicolas Boulay Desjardins
* @copyright      (c) 2011 Jean-Nicolas Boulay Desjardins
* @license        http://www.opensource.org/licenses/isc-license.txt
*/

class Kohana_SOLR {

	public static $client = NULL;
	public static $inputDoc = NULL;

	public static function init() {

		$options = Kohana::$config->load('solr');

		self::$client = new SolrClient($options);

	}

	public static function q($q, $start = 0, $rows = 50) {

		self::init();

		$query = new SolrQuery();
		$query->setQuery($q);
		$query->setStart(0);
		$query->setRows(50);
		$query_response = self::$client->query($query);
		return $query_response->getResponse();

	}

	public static function inputDoc() {

		self::$inputDoc = new SolrInputDocument();

	}

	public static function addFields($fields) {

		self::inputDoc();

		foreach ($fields as $name=>$value) {

			self::$inputDoc->addField($name, $value); 

		}

		$updateResponse = self::$client->addDocument(self::$inputDoc);

		return $updateResponse->getResponse();

	}

	public static function () {

		

	}

}
