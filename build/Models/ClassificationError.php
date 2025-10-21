<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationError
 */
class ClassificationError
{
    public function __construct(
        /** @var string[] A collection of more specific errors contributing to the overall error. */
        public array $details = []
    ) {}
}
