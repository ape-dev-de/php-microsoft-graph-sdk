<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for KeyCredentialCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class KeyCredentialCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific KeyCredentialCollectionResponse properties
     * 
     * @param array<string> $select Use KeyCredentialCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
