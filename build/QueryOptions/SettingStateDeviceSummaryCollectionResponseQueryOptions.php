<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingStateDeviceSummaryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SettingStateDeviceSummaryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SettingStateDeviceSummaryCollectionResponse properties
     * 
     * @param array<string> $select Use SettingStateDeviceSummaryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
