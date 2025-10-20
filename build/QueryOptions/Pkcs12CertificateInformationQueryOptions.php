<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Pkcs12CertificateInformation resources
 *
 * Available select fields:
 * - isActive
 * - notAfter
 * - notBefore
 * - thumbprint
 */
class Pkcs12CertificateInformationQueryOptions extends QueryOptions
{
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_NOT_AFTER = 'notAfter';
    public const FIELD_NOT_BEFORE = 'notBefore';
    public const FIELD_THUMBPRINT = 'thumbprint';

    /**
     * Select specific Pkcs12CertificateInformation properties
     * 
     * @param array<string> $select Use Pkcs12CertificateInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
