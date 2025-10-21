<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppXAppAssignmentSettings
 */
class WindowsUniversalAppXAppAssignmentSettings
{
    public function __construct(
        /** Contains properties used when assigning a Windows Universal AppX mobile app to a group. */
        public ?string $useDeviceContext = null
    ) {}
}
