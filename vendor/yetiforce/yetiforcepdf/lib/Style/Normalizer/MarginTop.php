<?php

declare(strict_types=1);
/**
 * MarginTop class.
 *
 * @package   YetiForcePDF\Style\Normalizer
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License v3
 * @author    Rafal Pospiech <r.pospiech@yetiforce.com>
 */

namespace YetiForcePDF\Style\Normalizer;

/**
 * Class MarginTop.
 */
class MarginTop extends Normalizer
{
	public function normalize($ruleValue, string $ruleName = ''): array
	{
		if (null === $this->normalized) {
			return $this->normalized = ['margin-top' => $this->getNumberValues($ruleValue)[0]];
		}
		return $this->normalized;
	}
}
