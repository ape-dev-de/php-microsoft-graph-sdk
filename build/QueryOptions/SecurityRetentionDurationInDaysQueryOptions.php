<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionDurationInDays resources
 *
 * Available select fields:
 * - days
 */
class SecurityRetentionDurationInDaysQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionDurationInDays
     */
    public const FIELD_DAYS = 'days';

    /**
     * Select specific SecurityRetentionDurationInDays properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
