<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordCredentialCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PasswordCredentialCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PasswordCredentialCollectionResponse properties
     * 
     * @param array<string> $select Use PasswordCredentialCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
