<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerClientEnabledFeatures
 */
class ConfigurationManagerClientEnabledFeatures
{
    public function __construct(
        /** Whether compliance policy is managed by Intune */
        public ?bool $compliancePolicy = null,
        /** Whether device configuration is managed by Intune */
        public ?bool $deviceConfiguration = null,
        /** Whether inventory is managed by Intune */
        public ?bool $inventory = null,
        /** Whether modern application is managed by Intune */
        public ?bool $modernApps = null,
        /** Whether resource access is managed by Intune */
        public ?bool $resourceAccess = null,
        /** configuration Manager client enabled features */
        public ?string $windowsUpdateForBusiness = null
    ) {}
}
