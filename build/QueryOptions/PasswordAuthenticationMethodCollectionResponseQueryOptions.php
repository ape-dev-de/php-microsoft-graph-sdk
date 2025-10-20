<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordAuthenticationMethodCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PasswordAuthenticationMethodCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PasswordAuthenticationMethodCollectionResponse properties
     * 
     * @param array<string> $select Use PasswordAuthenticationMethodCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
