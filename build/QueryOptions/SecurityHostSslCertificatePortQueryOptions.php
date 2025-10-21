<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostSslCertificatePort resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - port
 */
class SecurityHostSslCertificatePortQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostSslCertificatePort
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_PORT = 'port';

    /**
     * Select specific SecurityHostSslCertificatePort properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
