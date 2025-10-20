<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkUserIdentityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeamworkUserIdentityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeamworkUserIdentityCollectionResponse properties
     * 
     * @param array<string> $select Use TeamworkUserIdentityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
