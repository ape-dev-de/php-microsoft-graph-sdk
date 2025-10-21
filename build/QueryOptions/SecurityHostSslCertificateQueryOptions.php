<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostSslCertificate resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - ports
 * - host
 * - sslCertificate
 */
class SecurityHostSslCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostSslCertificate
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_PORTS = 'ports';
    public const FIELD_HOST = 'host';
    public const FIELD_SSL_CERTIFICATE = 'sslCertificate';

    /**
     * Select specific SecurityHostSslCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
