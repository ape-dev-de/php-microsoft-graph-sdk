<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConfigurationSettingItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppConfigurationSettingItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppConfigurationSettingItemCollectionResponse properties
     * 
     * @param array<string> $select Use AppConfigurationSettingItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
