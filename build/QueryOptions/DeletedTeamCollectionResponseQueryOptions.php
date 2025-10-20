<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeletedTeamCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DeletedTeamCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DeletedTeamCollectionResponse properties
     * 
     * @param array<string> $select Use DeletedTeamCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
