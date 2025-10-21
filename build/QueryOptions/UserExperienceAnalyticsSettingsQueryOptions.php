<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsSettings resources
 *
 * Available select fields:
 * - configurationManagerDataConnectorConfigured
 */
class UserExperienceAnalyticsSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsSettings
     */
    public const FIELD_CONFIGURATION_MANAGER_DATA_CONNECTOR_CONFIGURED = 'configurationManagerDataConnectorConfigured';

    /**
     * Select specific UserExperienceAnalyticsSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
