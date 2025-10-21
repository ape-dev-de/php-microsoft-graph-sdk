<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOsLobAppAssignmentSettings
 */
class MacOsLobAppAssignmentSettings
{
    public function __construct(
        /** Contains properties used to assign a macOS LOB app to a group. */
        public ?string $uninstallOnDeviceRemoval = null
    ) {}
}
