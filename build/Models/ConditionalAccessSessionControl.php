<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessSessionControl
 */
class ConditionalAccessSessionControl
{
    public function __construct(
        /** Specifies whether the session control is enabled. */
        public ?string $isEnabled = null
    ) {}
}
