<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PendingOperations resources
 *
 * Available select fields:
 * - pendingContentUpdate
 */
class PendingOperationsQueryOptions extends QueryOptions
{
    public const FIELD_PENDING_CONTENT_UPDATE = 'pendingContentUpdate';

    /**
     * Select specific PendingOperations properties
     * 
     * @param array<string> $select Use PendingOperationsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
