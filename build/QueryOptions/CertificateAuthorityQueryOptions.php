<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateAuthority resources
 *
 * Available select fields:
 * - certificate
 * - certificateRevocationListUrl
 * - deltaCertificateRevocationListUrl
 * - isRootAuthority
 * - issuer
 * - issuerSki
 */
class CertificateAuthorityQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATE = 'certificate';
    public const FIELD_CERTIFICATE_REVOCATION_LIST_URL = 'certificateRevocationListUrl';
    public const FIELD_DELTA_CERTIFICATE_REVOCATION_LIST_URL = 'deltaCertificateRevocationListUrl';
    public const FIELD_IS_ROOT_AUTHORITY = 'isRootAuthority';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_SKI = 'issuerSki';

    /**
     * Select specific CertificateAuthority properties
     * 
     * @param array<string> $select Use CertificateAuthorityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
