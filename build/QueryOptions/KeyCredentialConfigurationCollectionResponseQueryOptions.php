<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for KeyCredentialConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class KeyCredentialConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific KeyCredentialConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use KeyCredentialConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
