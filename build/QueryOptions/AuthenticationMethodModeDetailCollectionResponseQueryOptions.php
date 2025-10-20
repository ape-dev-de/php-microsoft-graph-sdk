<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodModeDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationMethodModeDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationMethodModeDetailCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationMethodModeDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
