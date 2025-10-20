<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentitySourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentitySourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentitySourceCollectionResponse properties
     * 
     * @param array<string> $select Use IdentitySourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
