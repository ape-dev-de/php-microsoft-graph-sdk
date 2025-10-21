<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PendingContentUpdate resources
 *
 * Available select fields:
 * - queuedDateTime
 */
class PendingContentUpdateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PendingContentUpdate
     */
    public const FIELD_QUEUED_DATE_TIME = 'queuedDateTime';

    /**
     * Select specific PendingContentUpdate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
