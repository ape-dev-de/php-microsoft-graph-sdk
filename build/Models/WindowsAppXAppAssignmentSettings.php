<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppXAppAssignmentSettings
 */
class WindowsAppXAppAssignmentSettings
{
    public function __construct(
        /** Contains properties used when assigning a Windows AppX mobile app to a group. */
        public ?string $useDeviceContext = null
    ) {}
}
