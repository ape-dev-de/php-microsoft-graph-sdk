<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecycleBinSettings resources
 *
 * Available select fields:
 * - retentionPeriodOverrideDays
 */
class RecycleBinSettingsQueryOptions extends QueryOptions
{
    public const FIELD_RETENTION_PERIOD_OVERRIDE_DAYS = 'retentionPeriodOverrideDays';

    /**
     * Select specific RecycleBinSettings properties
     * 
     * @param array<string> $select Use RecycleBinSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
