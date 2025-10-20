<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthenticationStrengthPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthenticationStrengthPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use AuthenticationStrengthPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
