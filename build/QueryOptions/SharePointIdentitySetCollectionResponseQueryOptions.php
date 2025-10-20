<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointIdentitySetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharePointIdentitySetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharePointIdentitySetCollectionResponse properties
     * 
     * @param array<string> $select Use SharePointIdentitySetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
