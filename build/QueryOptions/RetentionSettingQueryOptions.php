<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RetentionSetting resources
 *
 * Available select fields:
 * - interval
 * - period
 */
class RetentionSettingQueryOptions extends QueryOptions
{
    public const FIELD_INTERVAL = 'interval';
    public const FIELD_PERIOD = 'period';

    /**
     * Select specific RetentionSetting properties
     * 
     * @param array<string> $select Use RetentionSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
