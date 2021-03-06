<?php
/*
Kole Imports Dropship API Client
Copyright (C) <2013>  <Jesse Reese>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>
*/

namespace KoleImports\DropshipApi\Service;

class SerializerService
{
	/**
	* Raw response data from API request
	* @var $data
	*/
	private $data;

	/**
	* @var $serializer JMS Serializer Object
	*/
	private $serializer;

	public function __construct($serializer)
	{
		$this->serializer = $serializer;
	}

	public function getXml()
	{
		return $this->serializer->serialize($this->data, 'xml');
	}

	public function getJson()
	{
		return $this->serializer->serialize($this->data, 'json');
	}

	public function setData($data)
	{
		$this->data = $data;

		return $this;
	}

	public function getData()
	{
		return $this->data;
	}
}
