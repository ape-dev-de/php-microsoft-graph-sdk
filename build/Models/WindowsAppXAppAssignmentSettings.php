<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAppXAppAssignmentSettings
 */
class WindowsAppXAppAssignmentSettings
{
    public function __construct(
        /** When TRUE, indicates that device execution context will be used for the AppX mobile app. When FALSE, indicates that user context will be used for the AppX mobile app. By default, this property is set to FALSE. Once this property has been set to TRUE it cannot be changed. */
        public ?bool $useDeviceContext = null
    ) {}
}
