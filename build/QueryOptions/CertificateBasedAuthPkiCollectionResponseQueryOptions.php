<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateBasedAuthPkiCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CertificateBasedAuthPkiCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CertificateBasedAuthPkiCollectionResponse properties
     * 
     * @param array<string> $select Use CertificateBasedAuthPkiCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
