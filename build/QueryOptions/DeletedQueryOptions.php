<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Deleted resources
 *
 * Available select fields:
 * - state
 */
class DeletedQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Deleted
     */
    public const FIELD_STATE = 'state';

    /**
     * Select specific Deleted properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
