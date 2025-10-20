<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProxiedDomainCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProxiedDomainCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProxiedDomainCollectionResponse properties
     * 
     * @param array<string> $select Use ProxiedDomainCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
