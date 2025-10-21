<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CertificateAuthorityDetail resources
 *
 * Available select fields:
 * - certificate
 * - certificateAuthorityType
 * - certificateRevocationListUrl
 * - createdDateTime
 * - deltaCertificateRevocationListUrl
 * - displayName
 * - expirationDateTime
 * - isIssuerHintEnabled
 * - issuer
 * - issuerSubjectKeyIdentifier
 * - thumbprint
 */
class CertificateAuthorityDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CertificateAuthorityDetail
     */
    public const FIELD_CERTIFICATE = 'certificate';
    public const FIELD_CERTIFICATE_AUTHORITY_TYPE = 'certificateAuthorityType';
    public const FIELD_CERTIFICATE_REVOCATION_LIST_URL = 'certificateRevocationListUrl';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DELTA_CERTIFICATE_REVOCATION_LIST_URL = 'deltaCertificateRevocationListUrl';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_IS_ISSUER_HINT_ENABLED = 'isIssuerHintEnabled';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_SUBJECT_KEY_IDENTIFIER = 'issuerSubjectKeyIdentifier';
    public const FIELD_THUMBPRINT = 'thumbprint';

    /**
     * Select specific CertificateAuthorityDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
