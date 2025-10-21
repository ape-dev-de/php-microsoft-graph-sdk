<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2CombinationConfiguration
 */
class Fido2CombinationConfiguration
{
    public function __construct(
        /** @var string[] A list of AAGUIDs allowed to be used as part of the specified authentication method combinations. */
        public array $allowedAAGUIDs = []
    ) {}
}
