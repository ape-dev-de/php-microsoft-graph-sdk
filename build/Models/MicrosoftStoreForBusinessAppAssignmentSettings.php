<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessAppAssignmentSettings
 */
class MicrosoftStoreForBusinessAppAssignmentSettings
{
    public function __construct(
        /** Contains properties used to assign an Microsoft Store for Business mobile app to a group. */
        public ?string $useDeviceContext = null
    ) {}
}
