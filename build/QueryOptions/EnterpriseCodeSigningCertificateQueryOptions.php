<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnterpriseCodeSigningCertificate resources
 *
 * Available select fields:
 * - content
 * - expirationDateTime
 * - issuer
 * - issuerName
 * - status
 * - subject
 * - subjectName
 * - uploadDateTime
 */
class EnterpriseCodeSigningCertificateQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_ISSUER_NAME = 'issuerName';
    public const FIELD_STATUS = 'status';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_SUBJECT_NAME = 'subjectName';
    public const FIELD_UPLOAD_DATE_TIME = 'uploadDateTime';

    /**
     * Select specific EnterpriseCodeSigningCertificate properties
     * 
     * @param array<string> $select Use EnterpriseCodeSigningCertificateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
