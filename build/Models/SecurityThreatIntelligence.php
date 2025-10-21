<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityThreatIntelligence
 */
class SecurityThreatIntelligence
{
    /**
     * Refers to indicators of threat or compromise highlighted in an article.Note: List retrieval is not yet supported.
     */
    private array $articleIndicators = [];

    /**
     * A list of article objects.
     */
    private array $articles = [];

    /**
     * Retrieve details about hostComponent objects.Note: List retrieval is not yet supported.
     */
    private array $hostComponents = [];

    /**
     * Retrieve details about hostCookie objects.Note: List retrieval is not yet supported.
     */
    private array $hostCookies = [];

    /**
     * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
     */
    private array $hostPairs = [];

    /**
     * Retrieve details about hostPort objects.Note: List retrieval is not yet supported.
     */
    private array $hostPorts = [];

    /**
     * Refers to host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     */
    private array $hosts = [];

    /**
     * Retrieve details about hostSslCertificate objects.Note: List retrieval is not yet supported.
     */
    private array $hostSslCertificates = [];

    /**
     * Retrieve details about hostTracker objects.Note: List retrieval is not yet supported.
     */
    private array $hostTrackers = [];

    /**
     */
    private array $intelligenceProfileIndicators = [];

    /**
     * A list of intelligenceProfile objects.
     */
    private array $intelProfiles = [];

    /**
     * Retrieve details about passiveDnsRecord objects.Note: List retrieval is not yet supported.
     */
    private array $passiveDnsRecords = [];

    /**
     * Retrieve details about sslCertificate objects.Note: List retrieval is not yet supported.
     */
    private array $sslCertificates = [];

    /**
     * Retrieve details about the subdomain.Note: List retrieval is not yet supported.
     */
    private array $subdomains = [];

    /**
     * Retrieve details about vulnerabilities.Note: List retrieval is not yet supported.
     */
    private array $vulnerabilities = [];

    /**
     * Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported.
     */
    private array $whoisHistoryRecords = [];

    /**
     * A list of whoisRecord objects.
     * @var string[]
     */
    private array $whoisRecords = [];


    public function getArticleIndicators(): array
    {
        return $this->articleIndicators;
    }

    public function setArticleIndicators(array $articleIndicators): self
    {
        $this->articleIndicators = $articleIndicators;
        return $this;
    }

    public function getArticles(): array
    {
        return $this->articles;
    }

    public function setArticles(array $articles): self
    {
        $this->articles = $articles;
        return $this;
    }

    public function getHostComponents(): array
    {
        return $this->hostComponents;
    }

    public function setHostComponents(array $hostComponents): self
    {
        $this->hostComponents = $hostComponents;
        return $this;
    }

    public function getHostCookies(): array
    {
        return $this->hostCookies;
    }

    public function setHostCookies(array $hostCookies): self
    {
        $this->hostCookies = $hostCookies;
        return $this;
    }

    public function getHostPairs(): array
    {
        return $this->hostPairs;
    }

    public function setHostPairs(array $hostPairs): self
    {
        $this->hostPairs = $hostPairs;
        return $this;
    }

    public function getHostPorts(): array
    {
        return $this->hostPorts;
    }

    public function setHostPorts(array $hostPorts): self
    {
        $this->hostPorts = $hostPorts;
        return $this;
    }

    public function getHosts(): array
    {
        return $this->hosts;
    }

    public function setHosts(array $hosts): self
    {
        $this->hosts = $hosts;
        return $this;
    }

    public function getHostSslCertificates(): array
    {
        return $this->hostSslCertificates;
    }

    public function setHostSslCertificates(array $hostSslCertificates): self
    {
        $this->hostSslCertificates = $hostSslCertificates;
        return $this;
    }

    public function getHostTrackers(): array
    {
        return $this->hostTrackers;
    }

    public function setHostTrackers(array $hostTrackers): self
    {
        $this->hostTrackers = $hostTrackers;
        return $this;
    }

    public function getIntelligenceProfileIndicators(): array
    {
        return $this->intelligenceProfileIndicators;
    }

    public function setIntelligenceProfileIndicators(array $intelligenceProfileIndicators): self
    {
        $this->intelligenceProfileIndicators = $intelligenceProfileIndicators;
        return $this;
    }

    public function getIntelProfiles(): array
    {
        return $this->intelProfiles;
    }

    public function setIntelProfiles(array $intelProfiles): self
    {
        $this->intelProfiles = $intelProfiles;
        return $this;
    }

    public function getPassiveDnsRecords(): array
    {
        return $this->passiveDnsRecords;
    }

    public function setPassiveDnsRecords(array $passiveDnsRecords): self
    {
        $this->passiveDnsRecords = $passiveDnsRecords;
        return $this;
    }

    public function getSslCertificates(): array
    {
        return $this->sslCertificates;
    }

    public function setSslCertificates(array $sslCertificates): self
    {
        $this->sslCertificates = $sslCertificates;
        return $this;
    }

    public function getSubdomains(): array
    {
        return $this->subdomains;
    }

    public function setSubdomains(array $subdomains): self
    {
        $this->subdomains = $subdomains;
        return $this;
    }

    public function getVulnerabilities(): array
    {
        return $this->vulnerabilities;
    }

    public function setVulnerabilities(array $vulnerabilities): self
    {
        $this->vulnerabilities = $vulnerabilities;
        return $this;
    }

    public function getWhoisHistoryRecords(): array
    {
        return $this->whoisHistoryRecords;
    }

    public function setWhoisHistoryRecords(array $whoisHistoryRecords): self
    {
        $this->whoisHistoryRecords = $whoisHistoryRecords;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWhoisRecords(): array
    {
        return $this->whoisRecords;
    }

    /**
     * @param string[] $whoisRecords
     */
    public function setWhoisRecords(array $whoisRecords): self
    {
        $this->whoisRecords = $whoisRecords;
        return $this;
    }

}
