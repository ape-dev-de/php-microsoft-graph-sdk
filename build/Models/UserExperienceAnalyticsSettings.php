<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsSettings
 */
class UserExperienceAnalyticsSettings
{
    public function __construct(
        /** When TRUE, indicates Tenant attach is configured properly and System Center Configuration Manager (SCCM) tenant attached devices will show up in endpoint analytics reporting. When FALSE, indicates Tenant attach is not configured. FALSE by default. */
        public ?bool $configurationManagerDataConnectorConfigured = null
    ) {}
}
