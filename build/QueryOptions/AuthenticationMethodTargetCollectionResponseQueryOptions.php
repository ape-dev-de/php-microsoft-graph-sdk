<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodTargetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationMethodTargetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationMethodTargetCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationMethodTargetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
