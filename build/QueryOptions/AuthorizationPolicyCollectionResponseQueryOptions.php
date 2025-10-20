<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthorizationPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AuthorizationPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AuthorizationPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use AuthorizationPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
