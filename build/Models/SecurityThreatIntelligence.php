<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityThreatIntelligence
 */
class SecurityThreatIntelligence
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Refers to indicators of threat or compromise highlighted in an article.Note: List retrieval is not yet supported. */
        public array $articleIndicators = [],
        /** A list of article objects. */
        public array $articles = [],
        /** Retrieve details about hostComponent objects.Note: List retrieval is not yet supported. */
        public array $hostComponents = [],
        /** Retrieve details about hostCookie objects.Note: List retrieval is not yet supported. */
        public array $hostCookies = [],
        /** Retrieve details about hostTracker objects.Note: List retrieval is not yet supported. */
        public array $hostPairs = [],
        /** Retrieve details about hostPort objects.Note: List retrieval is not yet supported. */
        public array $hostPorts = [],
        /** Refers to host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported. */
        public array $hosts = [],
        /** Retrieve details about hostSslCertificate objects.Note: List retrieval is not yet supported. */
        public array $hostSslCertificates = [],
        /** Retrieve details about hostTracker objects.Note: List retrieval is not yet supported. */
        public array $hostTrackers = [],
        /**  */
        public array $intelligenceProfileIndicators = [],
        /** A list of intelligenceProfile objects. */
        public array $intelProfiles = [],
        /** Retrieve details about passiveDnsRecord objects.Note: List retrieval is not yet supported. */
        public array $passiveDnsRecords = [],
        /** Retrieve details about sslCertificate objects.Note: List retrieval is not yet supported. */
        public array $sslCertificates = [],
        /** Retrieve details about the subdomain.Note: List retrieval is not yet supported. */
        public array $subdomains = [],
        /** Retrieve details about vulnerabilities.Note: List retrieval is not yet supported. */
        public array $vulnerabilities = [],
        /** Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported. */
        public array $whoisHistoryRecords = [],
        /** @var string[] A list of whoisRecord objects. */
        public array $whoisRecords = []
    ) {}
}
