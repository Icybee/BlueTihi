<?php

/*
 * This file is part of the Icybee package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BlueTihi;

use ICanBoogie\OffsetNotDefined;
use ICanBoogie\ToArray;

/**
 * A stacked context.
 */
class Context implements \ArrayAccess, \IteratorAggregate, ToArray
{
	protected $values = [];
	protected $values_stack = [];
	protected $depth = 0;
	protected $this_arg;

	public function __construct(array $values=[], $this_arg=null)
	{
		$this->values = $values;
		$this->this_arg = $this_arg;
	}

	public function offsetExists($offset)
	{
		return array_key_exists($offset, $this->values);
	}

	public function &offsetGet($offset)
	{
		if (!$this->offsetExists($offset))
		{
			throw new OffsetNotDefined([ $offset, $this ]);
		}

		return $this->values[$offset];
	}

	public function offsetSet($offset, $value)
	{
		$this->values[$offset] = $value;
	}

	public function offsetUnset($offset)
	{
		unset($this->values[$offset]);
	}

	public function getIterator()
	{
		return new \ArrayIterator($this->values);
	}

	/**
	 * Push the current context to the stack.
	 */
	public function push()
	{
		$this->depth++;
		array_push($this->values_stack, $this->values);
	}

	/**
	 * Pop the previous context from the stack.
	 */
	public function pop()
	{
		$this->depth--;
		$this->values = array_pop($this->values_stack);
	}

	/**
	 * Return the key of the entires in the context.
	 *
	 * @return array
	 */
	public function keys()
	{
		return array_keys($this->values);
	}

	/**
	 * Return the values of the entries in the context.
	 *
	 * @return array
	 */
	public function values()
	{
		return array_values($this->values);
	}

	/**
	 * Return the entries in the context.
	 */
	public function to_array()
	{
		return $this->values;
	}
}