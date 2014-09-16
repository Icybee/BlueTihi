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

class ContextTest extends \PHPUnit_Framework_TestCase
{
	public function test_get_null_value()
	{
		$context = new Context([

			'value' => null

		]);

		$this->assertNull($context['value']);
	}

	public function test_stack()
	{
		$context = new Context;
		$this->assertSame([], $context->to_array());

		$context->push();
		$context['one'] = 1;
		$this->assertSame([ 'one' => 1 ], $context->to_array());

		$context->push();
		$context['two'] = 2;
		$this->assertSame([ 'one' => 1, 'two' => 2 ], $context->to_array());

		$context->push();
		$context['three'] = 3;
		$this->assertSame([ 'one' => 1, 'two' => 2, 'three' => 3 ], $context->to_array());

		$context->pop();
		$this->assertSame([ 'one' => 1, 'two' => 2 ], $context->to_array());

		$context->pop();
		$this->assertSame([ 'one' => 1 ], $context->to_array());

		$context->pop();
		$this->assertSame([], $context->to_array());
	}
}