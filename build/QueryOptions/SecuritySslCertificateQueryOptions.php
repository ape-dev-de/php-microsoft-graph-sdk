<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySslCertificate resources
 *
 * Available select fields:
 * - expirationDateTime
 * - fingerprint
 * - firstSeenDateTime
 * - issueDateTime
 * - issuer
 * - lastSeenDateTime
 * - serialNumber
 * - sha1
 * - subject
 * - relatedHosts
 */
class SecuritySslCertificateQueryOptions extends QueryOptions
{
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_FINGERPRINT = 'fingerprint';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_ISSUE_DATE_TIME = 'issueDateTime';
    public const FIELD_ISSUER = 'issuer';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_SERIAL_NUMBER = 'serialNumber';
    public const FIELD_SHA1 = 'sha1';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_RELATED_HOSTS = 'relatedHosts';

    /**
     * Select specific SecuritySslCertificate properties
     * 
     * @param array<string> $select Use SecuritySslCertificateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
