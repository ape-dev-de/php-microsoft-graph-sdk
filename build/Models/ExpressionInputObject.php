<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExpressionInputObject
 */
class ExpressionInputObject
{
    public function __construct(
        /** Definition of the test object. */
        public array $definition = [],
        /** Property values of the test object. */
        public ?string $items = null
    ) {}
}
