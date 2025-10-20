<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConfigurationSettingItem resources
 *
 * Available select fields:
 * - appConfigKey
 * - appConfigKeyType
 * - appConfigKeyValue
 */
class AppConfigurationSettingItemQueryOptions extends QueryOptions
{
    public const FIELD_APP_CONFIG_KEY = 'appConfigKey';
    public const FIELD_APP_CONFIG_KEY_TYPE = 'appConfigKeyType';
    public const FIELD_APP_CONFIG_KEY_VALUE = 'appConfigKeyValue';

    /**
     * Select specific AppConfigurationSettingItem properties
     * 
     * @param array<string> $select Use AppConfigurationSettingItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
