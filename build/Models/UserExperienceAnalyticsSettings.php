<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsSettings
 */
class UserExperienceAnalyticsSettings
{
    public function __construct(
        /** The user experience analytics insight is the recomendation to improve the user experience analytics score. */
        public ?string $configurationManagerDataConnectorConfigured = null
    ) {}
}
