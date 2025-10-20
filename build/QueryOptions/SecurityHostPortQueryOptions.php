<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPort resources
 *
 * Available select fields:
 * - banners
 * - firstSeenDateTime
 * - lastScanDateTime
 * - lastSeenDateTime
 * - port
 * - protocol
 * - services
 * - status
 * - timesObserved
 * - host
 * - mostRecentSslCertificate
 */
class SecurityHostPortQueryOptions extends QueryOptions
{
    public const FIELD_BANNERS = 'banners';
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SCAN_DATE_TIME = 'lastScanDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_PORT = 'port';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SERVICES = 'services';
    public const FIELD_STATUS = 'status';
    public const FIELD_TIMES_OBSERVED = 'timesObserved';
    public const FIELD_HOST = 'host';
    public const FIELD_MOST_RECENT_SSL_CERTIFICATE = 'mostRecentSslCertificate';

    /**
     * Select specific SecurityHostPort properties
     * 
     * @param array<string> $select Use SecurityHostPortQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
