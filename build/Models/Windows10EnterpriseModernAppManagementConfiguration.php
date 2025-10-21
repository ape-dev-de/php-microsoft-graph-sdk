<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EnterpriseModernAppManagementConfiguration
 */
class Windows10EnterpriseModernAppManagementConfiguration
{
    public function __construct(
        /** Windows10 Enterprise Modern App Management Configuration. */
        public ?string $uninstallBuiltInApps = null
    ) {}
}
