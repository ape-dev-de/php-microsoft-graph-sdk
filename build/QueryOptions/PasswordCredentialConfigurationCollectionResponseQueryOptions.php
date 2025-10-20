<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordCredentialConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PasswordCredentialConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PasswordCredentialConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use PasswordCredentialConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
