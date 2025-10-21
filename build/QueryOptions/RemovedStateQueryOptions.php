<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemovedState resources
 *
 * Available select fields:
 * - reason
 */
class RemovedStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemovedState
     */
    public const FIELD_REASON = 'reason';

    /**
     * Select specific RemovedState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
