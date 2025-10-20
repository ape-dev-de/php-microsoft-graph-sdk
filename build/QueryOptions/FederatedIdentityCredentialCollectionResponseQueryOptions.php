<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FederatedIdentityCredentialCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FederatedIdentityCredentialCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FederatedIdentityCredentialCollectionResponse properties
     * 
     * @param array<string> $select Use FederatedIdentityCredentialCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
