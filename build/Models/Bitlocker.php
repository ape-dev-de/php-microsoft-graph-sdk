<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Bitlocker
 */
class Bitlocker
{
    public function __construct(
        /** @var string[] The recovery keys associated with the bitlocker entity. */
        public array $recoveryKeys = []
    ) {}
}
