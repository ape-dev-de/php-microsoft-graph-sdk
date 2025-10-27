<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityThreatIntelligence
 */
class SecurityThreatIntelligence
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Refers to indicators of threat or compromise highlighted in an article.Note: List retrieval is not yet supported.
     * @var SecurityArticleIndicator[]
     */
    public array $articleIndicators = [];

    /** 
     * A list of article objects.
     * @var SecurityArticle[]
     */
    public array $articles = [];

    /** 
     * Retrieve details about hostComponent objects.Note: List retrieval is not yet supported.
     * @var SecurityHostComponent[]
     */
    public array $hostComponents = [];

    /** 
     * Retrieve details about hostCookie objects.Note: List retrieval is not yet supported.
     * @var SecurityHostCookie[]
     */
    public array $hostCookies = [];

    /** 
     * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
     * @var SecurityHostPair[]
     */
    public array $hostPairs = [];

    /** 
     * Retrieve details about hostPort objects.Note: List retrieval is not yet supported.
     * @var SecurityHostPort[]
     */
    public array $hostPorts = [];

    /** 
     * Refers to host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     * @var SecurityHost[]
     */
    public array $hosts = [];

    /** 
     * Retrieve details about hostSslCertificate objects.Note: List retrieval is not yet supported.
     * @var SecurityHostSslCertificate[]
     */
    public array $hostSslCertificates = [];

    /** 
     * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
     * @var SecurityHostTracker[]
     */
    public array $hostTrackers = [];

    /** 
     * 
     * @var SecurityIntelligenceProfileIndicator[]
     */
    public array $intelligenceProfileIndicators = [];

    /** 
     * A list of intelligenceProfile objects.
     * @var SecurityIntelligenceProfile[]
     */
    public array $intelProfiles = [];

    /** 
     * Retrieve details about passiveDnsRecord objects.Note: List retrieval is not yet supported.
     * @var SecurityPassiveDnsRecord[]
     */
    public array $passiveDnsRecords = [];

    /** 
     * Retrieve details about sslCertificate objects.Note: List retrieval is not yet supported.
     * @var SecuritySslCertificate[]
     */
    public array $sslCertificates = [];

    /** 
     * Retrieve details about the subdomain.Note: List retrieval is not yet supported.
     * @var SecuritySubdomain[]
     */
    public array $subdomains = [];

    /** 
     * Retrieve details about vulnerabilities.Note: List retrieval is not yet supported.
     * @var SecurityVulnerability[]
     */
    public array $vulnerabilities = [];

    /** 
     * Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported.
     * @var SecurityWhoisHistoryRecord[]
     */
    public array $whoisHistoryRecords = [];

    /** 
     * A list of whoisRecord objects.
     * @var SecurityWhoisRecord[]
     */
    public array $whoisRecords = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['articleIndicators'])) {
            $this->articleIndicators = $data['articleIndicators'];
        }
        if (isset($data['articles'])) {
            $this->articles = $data['articles'];
        }
        if (isset($data['hostComponents'])) {
            $this->hostComponents = $data['hostComponents'];
        }
        if (isset($data['hostCookies'])) {
            $this->hostCookies = $data['hostCookies'];
        }
        if (isset($data['hostPairs'])) {
            $this->hostPairs = $data['hostPairs'];
        }
        if (isset($data['hostPorts'])) {
            $this->hostPorts = $data['hostPorts'];
        }
        if (isset($data['hosts'])) {
            $this->hosts = $data['hosts'];
        }
        if (isset($data['hostSslCertificates'])) {
            $this->hostSslCertificates = $data['hostSslCertificates'];
        }
        if (isset($data['hostTrackers'])) {
            $this->hostTrackers = $data['hostTrackers'];
        }
        if (isset($data['intelligenceProfileIndicators'])) {
            $this->intelligenceProfileIndicators = $data['intelligenceProfileIndicators'];
        }
        if (isset($data['intelProfiles'])) {
            $this->intelProfiles = $data['intelProfiles'];
        }
        if (isset($data['passiveDnsRecords'])) {
            $this->passiveDnsRecords = $data['passiveDnsRecords'];
        }
        if (isset($data['sslCertificates'])) {
            $this->sslCertificates = $data['sslCertificates'];
        }
        if (isset($data['subdomains'])) {
            $this->subdomains = $data['subdomains'];
        }
        if (isset($data['vulnerabilities'])) {
            $this->vulnerabilities = $data['vulnerabilities'];
        }
        if (isset($data['whoisHistoryRecords'])) {
            $this->whoisHistoryRecords = $data['whoisHistoryRecords'];
        }
        if (isset($data['whoisRecords'])) {
            $this->whoisRecords = $data['whoisRecords'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
