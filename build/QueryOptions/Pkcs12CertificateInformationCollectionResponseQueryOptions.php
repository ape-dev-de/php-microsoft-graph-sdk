<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Pkcs12CertificateInformationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Pkcs12CertificateInformationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Pkcs12CertificateInformationCollectionResponse properties
     * 
     * @param array<string> $select Use Pkcs12CertificateInformationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
