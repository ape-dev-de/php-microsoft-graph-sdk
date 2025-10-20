<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateAuthorityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CertificateAuthorityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CertificateAuthorityCollectionResponse properties
     * 
     * @param array<string> $select Use CertificateAuthorityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
