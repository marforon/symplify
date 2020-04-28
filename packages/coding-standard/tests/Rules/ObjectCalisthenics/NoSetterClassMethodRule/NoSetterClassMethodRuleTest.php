<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\ObjectCalisthenics\NoSetterClassMethodRule;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;
use Symplify\CodingStandard\Rules\ObjectCalisthenics\NoSetterClassMethodRule;

final class NoSetterClassMethodRuleTest extends RuleTestCase
{
    public function testRule(): void
    {
        $this->analyse(
            [__DIR__ . '/Source/SetterMethod.php'],
            [[sprintf(NoSetterClassMethodRule::ERROR_MESSAGE, 'setName'), 9]]
        );
    }

    protected function getRule(): Rule
    {
        return new NoSetterClassMethodRule();
    }
}