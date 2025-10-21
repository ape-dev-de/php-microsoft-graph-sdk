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
        public ?string $definition = null,
        /** Property values of the test object. */
        public array $properties = []
    ) {}
}
