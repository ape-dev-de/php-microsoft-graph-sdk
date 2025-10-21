<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityThreatIntelligence resources
 *
 * Available select fields:
 * - articleIndicators
 * - articles
 * - hostComponents
 * - hostCookies
 * - hostPairs
 * - hostPorts
 * - hosts
 * - hostSslCertificates
 * - hostTrackers
 * - intelligenceProfileIndicators
 * - intelProfiles
 * - passiveDnsRecords
 * - sslCertificates
 * - subdomains
 * - vulnerabilities
 * - whoisHistoryRecords
 * - whoisRecords
 */
class SecurityThreatIntelligenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityThreatIntelligence
     */
    public const FIELD_ARTICLE_INDICATORS = 'articleIndicators';
    public const FIELD_ARTICLES = 'articles';
    public const FIELD_HOST_COMPONENTS = 'hostComponents';
    public const FIELD_HOST_COOKIES = 'hostCookies';
    public const FIELD_HOST_PAIRS = 'hostPairs';
    public const FIELD_HOST_PORTS = 'hostPorts';
    public const FIELD_HOSTS = 'hosts';
    public const FIELD_HOST_SSL_CERTIFICATES = 'hostSslCertificates';
    public const FIELD_HOST_TRACKERS = 'hostTrackers';
    public const FIELD_INTELLIGENCE_PROFILE_INDICATORS = 'intelligenceProfileIndicators';
    public const FIELD_INTEL_PROFILES = 'intelProfiles';
    public const FIELD_PASSIVE_DNS_RECORDS = 'passiveDnsRecords';
    public const FIELD_SSL_CERTIFICATES = 'sslCertificates';
    public const FIELD_SUBDOMAINS = 'subdomains';
    public const FIELD_VULNERABILITIES = 'vulnerabilities';
    public const FIELD_WHOIS_HISTORY_RECORDS = 'whoisHistoryRecords';
    public const FIELD_WHOIS_RECORDS = 'whoisRecords';

    /**
     * Select specific SecurityThreatIntelligence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
