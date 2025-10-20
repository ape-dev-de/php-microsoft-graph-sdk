<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HomeRealmDiscoveryPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class HomeRealmDiscoveryPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific HomeRealmDiscoveryPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use HomeRealmDiscoveryPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
