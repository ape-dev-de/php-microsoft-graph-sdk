<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlatformCredentialAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PlatformCredentialAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PlatformCredentialAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use PlatformCredentialAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
