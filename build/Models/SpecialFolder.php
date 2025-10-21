<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SpecialFolder
 */
class SpecialFolder
{
    public function __construct(
        /** The unique identifier for this item in the /drive/special collection */
        public ?string $name = null
    ) {}
}
