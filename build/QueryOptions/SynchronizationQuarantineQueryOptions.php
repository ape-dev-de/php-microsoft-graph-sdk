<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationQuarantine resources
 *
 * Available select fields:
 * - currentBegan
 * - error
 * - nextAttempt
 * - reason
 * - seriesBegan
 * - seriesCount
 */
class SynchronizationQuarantineQueryOptions extends QueryOptions
{
    public const FIELD_CURRENT_BEGAN = 'currentBegan';
    public const FIELD_ERROR = 'error';
    public const FIELD_NEXT_ATTEMPT = 'nextAttempt';
    public const FIELD_REASON = 'reason';
    public const FIELD_SERIES_BEGAN = 'seriesBegan';
    public const FIELD_SERIES_COUNT = 'seriesCount';

    /**
     * Select specific SynchronizationQuarantine properties
     * 
     * @param array<string> $select Use SynchronizationQuarantineQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
