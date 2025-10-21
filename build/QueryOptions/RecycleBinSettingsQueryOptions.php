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
    /**
     * Available select fields for RecycleBinSettings
     */
    public const FIELD_RETENTION_PERIOD_OVERRIDE_DAYS = 'retentionPeriodOverrideDays';

    /**
     * Select specific RecycleBinSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
