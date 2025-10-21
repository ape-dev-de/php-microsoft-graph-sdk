<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingFunctionSchema
 */
class AttributeMappingFunctionSchema
{
    public function __construct(
        /** @var string[] Collection of function parameters. */
        public array $parameters = []
    ) {}
}
