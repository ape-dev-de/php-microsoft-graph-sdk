<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseDetailsCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LicenseDetailsCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LicenseDetailsCollectionResponse properties
     * 
     * @param array<string> $select Use LicenseDetailsCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
