<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHost resources
 *
 * Available select fields:
 * - firstSeenDateTime
 * - lastSeenDateTime
 * - childHostPairs
 * - components
 * - cookies
 * - hostPairs
 * - parentHostPairs
 * - passiveDns
 * - passiveDnsReverse
 * - ports
 * - reputation
 * - sslCertificates
 * - subdomains
 * - trackers
 * - whois
 */
class SecurityHostQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHost
     */
    public const FIELD_FIRST_SEEN_DATE_TIME = 'firstSeenDateTime';
    public const FIELD_LAST_SEEN_DATE_TIME = 'lastSeenDateTime';
    public const FIELD_CHILD_HOST_PAIRS = 'childHostPairs';
    public const FIELD_COMPONENTS = 'components';
    public const FIELD_COOKIES = 'cookies';
    public const FIELD_HOST_PAIRS = 'hostPairs';
    public const FIELD_PARENT_HOST_PAIRS = 'parentHostPairs';
    public const FIELD_PASSIVE_DNS = 'passiveDns';
    public const FIELD_PASSIVE_DNS_REVERSE = 'passiveDnsReverse';
    public const FIELD_PORTS = 'ports';
    public const FIELD_REPUTATION = 'reputation';
    public const FIELD_SSL_CERTIFICATES = 'sslCertificates';
    public const FIELD_SUBDOMAINS = 'subdomains';
    public const FIELD_TRACKERS = 'trackers';
    public const FIELD_WHOIS = 'whois';

    /**
     * Select specific SecurityHost properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
