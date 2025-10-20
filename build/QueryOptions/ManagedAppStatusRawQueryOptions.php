<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppStatusRaw resources
 *
 * Available select fields:
 * - content
 */
class ManagedAppStatusRawQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';

    /**
     * Select specific ManagedAppStatusRaw properties
     * 
     * @param array<string> $select Use ManagedAppStatusRawQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
