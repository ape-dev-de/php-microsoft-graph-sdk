<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosMobileAppConfiguration resources
 *
 * Available select fields:
 * - encodedSettingXml
 * - settings
 */
class IosMobileAppConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosMobileAppConfiguration
     */
    public const FIELD_ENCODED_SETTING_XML = 'encodedSettingXml';
    public const FIELD_SETTINGS = 'settings';

    /**
     * Select specific IosMobileAppConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
