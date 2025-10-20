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
    public const FIELD_REASON = 'reason';

    /**
     * Select specific RemovedState properties
     * 
     * @param array<string> $select Use RemovedStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
