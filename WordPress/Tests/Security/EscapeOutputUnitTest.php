<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Tests\Security;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the EscapeOutput sniff.
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   2013-06-11
 * @since   0.13.0     Class name changed: this class is now namespaced.
 * @since   1.0.0      This sniff has been moved from the `XSS` category to the `Security` category.
 *
 * @covers \WordPressCS\WordPress\Helpers\ArrayWalkingFunctionsHelper
 * @covers \WordPressCS\WordPress\Helpers\ContextHelper::get_safe_cast_tokens
 * @covers \WordPressCS\WordPress\Helpers\ConstantsHelper::is_use_of_global_constant
 * @covers \WordPressCS\WordPress\Helpers\EscapingFunctionsTrait
 * @covers \WordPressCS\WordPress\Helpers\PrintingFunctionsTrait
 * @covers \WordPressCS\WordPress\Sniffs\Security\EscapeOutputSniff
 */
final class EscapeOutputUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			17  => 1,
			19  => 1,
			36  => 1,
			39  => 1,
			40  => 1,
			41  => 1,
			43  => 1,
			46  => 1,
			53  => 1,
			59  => 1,
			60  => 1,
			65  => 1,
			68  => 1,
			71  => 1,
			73  => 1,
			75  => 1,
			101 => 1,
			103 => 1,
			111 => 1,
			112 => 1,
			113 => 1,
			114 => 1,
			125 => 1,
			126 => 1, // Old-style WPCS ignore comments are no longer supported.
			127 => 1, // Old-style WPCS ignore comments are no longer supported.
			128 => 1, // Old-style WPCS ignore comments are no longer supported.
			131 => 1,
			135 => 1,
			138 => 1,
			145 => 1,
			147 => 1,
			149 => 1,
			152 => 2,
			159 => 1,
			162 => 1,
			169 => 1,
			172 => 1,
			173 => 1,
			182 => 3,
			190 => 1,
			191 => 2,
			205 => 1,
			206 => 1,
			207 => 1,
			223 => 1,
			225 => 1,
			226 => 1,
			241 => 1, // Old-style WPCS ignore comments are no longer supported.
			245 => 1, // Old-style WPCS ignore comments are no longer supported.
			249 => 1, // Old-style WPCS ignore comments are no longer supported.
			252 => 1,
			253 => 1,
			263 => 1,
			264 => 1,
			266 => 1,
			282 => 1,
			286 => 1,
			289 => 1,
			294 => 1,
			297 => 1,
			307 => 1,
			313 => 1,
			314 => 1,
			315 => 1,
			319 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array();
	}
}
