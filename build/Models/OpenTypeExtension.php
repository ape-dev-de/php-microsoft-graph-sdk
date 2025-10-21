<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenTypeExtension
 */
class OpenTypeExtension
{
    public function __construct(
        /** A unique text identifier for an open type data extension. Optional. */
        public ?string $extensionName = null
    ) {}
}
