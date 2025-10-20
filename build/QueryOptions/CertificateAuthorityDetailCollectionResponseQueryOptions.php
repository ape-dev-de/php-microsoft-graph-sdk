<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateAuthorityDetailCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CertificateAuthorityDetailCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CertificateAuthorityDetailCollectionResponse properties
     * 
     * @param array<string> $select Use CertificateAuthorityDetailCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
