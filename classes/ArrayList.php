<?php
class ArrayList implements \Iterator {
	/**
	 * @var string
	 */
	private $elementType;
	/**
	 * @var function
	 */
	private $compareFunc;
	/**
	 * @var array
	 */
	private $list;
	
	public function __construct($elementType, $compareFunc = null) {
		$this->elementType = $elementType;
		$this->compareFunc = $compareFunc;
	}
	
	public function addItem($item) {
		if ($item instanceof $this->elementType) {
			$this->list[] = $item;
		} else {
			throw new Exception("Item is not of Type {$this->elementType}");
		}
	}
	
	public function getList() {
		return $this->list;
	}
	
	public function current() {
		
	}

	public function key() {
		
	}

	public function next() {
		
	}

	public function rewind() {
		
	}

	public function valid() {
		
	}

}


