<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessAppAssignmentSettings
 */
class MicrosoftStoreForBusinessAppAssignmentSettings
{
    public function __construct(
        /** Whether or not to use device execution context for Microsoft Store for Business mobile app. */
        public ?bool $useDeviceContext = null
    ) {}
}
