<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificationControlCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CertificationControlCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CertificationControlCollectionResponse properties
     * 
     * @param array<string> $select Use CertificationControlCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
