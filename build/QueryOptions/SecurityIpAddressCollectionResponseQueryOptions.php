<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIpAddressCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityIpAddressCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityIpAddressCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityIpAddressCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
