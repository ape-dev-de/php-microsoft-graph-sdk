<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIpAddress
 */
class SecurityIpAddress
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The first date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The most recent date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** 
     * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
     * @var SecurityHostPair[]
     */
    public array $childHostPairs = [];

    /** 
     * The hostComponents that are associated with this host.
     * @var SecurityHostComponent[]
     */
    public array $components = [];

    /** 
     * The hostCookies that are associated with this host.
     * @var SecurityHostCookie[]
     */
    public array $cookies = [];

    /** 
     * The hostPairs that are associated with this host, where this host is either the parentHost or childHost.
     * @var SecurityHostPair[]
     */
    public array $hostPairs = [];

    /** 
     * The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost.
     * @var SecurityHostPair[]
     */
    public array $parentHostPairs = [];

    /** 
     * Passive DNS retrieval about this host.
     * @var SecurityPassiveDnsRecord[]
     */
    public array $passiveDns = [];

    /** 
     * Reverse passive DNS retrieval about this host.
     * @var SecurityPassiveDnsRecord[]
     */
    public array $passiveDnsReverse = [];

    /** 
     * The hostPorts associated with a host.
     * @var SecurityHostPort[]
     */
    public array $ports = [];

    /** 
     * Represents a calculated reputation of this host.
     * @var SecurityHostReputation|\stdClass|null
     */
    public mixed $reputation = null;

    /** 
     * The hostSslCertificates that are associated with this host.
     * @var SecurityHostSslCertificate[]
     */
    public array $sslCertificates = [];

    /** 
     * The subdomains that are associated with this host.
     * @var SecuritySubdomain[]
     */
    public array $subdomains = [];

    /** 
     * The hostTrackers that are associated with this host.
     * @var SecurityHostTracker[]
     */
    public array $trackers = [];

    /** 
     * The most recent whoisRecord for this host.
     * @var SecurityWhoisRecord|\stdClass|null
     */
    public mixed $whois = null;

    /** 
     * The details about the autonomous system to which this IP address belongs.
     * @var SecurityAutonomousSystem|\stdClass|null
     */
    public mixed $autonomousSystem = null;

    /** The country/region for this IP address. */
    public ?string $countryOrRegion = null;

    /** The hosting company listed for this host. */
    public ?string $hostingProvider = null;

    /** The block of IP addresses this IP address belongs to. */
    public ?string $netblock = null;


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
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = is_string($data['firstSeenDateTime']) ? new \DateTimeImmutable($data['firstSeenDateTime']) : $data['firstSeenDateTime'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = is_string($data['lastSeenDateTime']) ? new \DateTimeImmutable($data['lastSeenDateTime']) : $data['lastSeenDateTime'];
        }
        if (isset($data['childHostPairs'])) {
            $this->childHostPairs = $data['childHostPairs'];
        }
        if (isset($data['components'])) {
            $this->components = $data['components'];
        }
        if (isset($data['cookies'])) {
            $this->cookies = $data['cookies'];
        }
        if (isset($data['hostPairs'])) {
            $this->hostPairs = $data['hostPairs'];
        }
        if (isset($data['parentHostPairs'])) {
            $this->parentHostPairs = $data['parentHostPairs'];
        }
        if (isset($data['passiveDns'])) {
            $this->passiveDns = $data['passiveDns'];
        }
        if (isset($data['passiveDnsReverse'])) {
            $this->passiveDnsReverse = $data['passiveDnsReverse'];
        }
        if (isset($data['ports'])) {
            $this->ports = $data['ports'];
        }
        if (isset($data['reputation'])) {
            $this->reputation = is_array($data['reputation']) ? new SecurityHostReputation($data['reputation']) : $data['reputation'];
        }
        if (isset($data['sslCertificates'])) {
            $this->sslCertificates = $data['sslCertificates'];
        }
        if (isset($data['subdomains'])) {
            $this->subdomains = $data['subdomains'];
        }
        if (isset($data['trackers'])) {
            $this->trackers = $data['trackers'];
        }
        if (isset($data['whois'])) {
            $this->whois = is_array($data['whois']) ? new SecurityWhoisRecord($data['whois']) : $data['whois'];
        }
        if (isset($data['autonomousSystem'])) {
            $this->autonomousSystem = is_array($data['autonomousSystem']) ? new SecurityAutonomousSystem($data['autonomousSystem']) : $data['autonomousSystem'];
        }
        if (isset($data['countryOrRegion'])) {
            $this->countryOrRegion = $data['countryOrRegion'];
        }
        if (isset($data['hostingProvider'])) {
            $this->hostingProvider = $data['hostingProvider'];
        }
        if (isset($data['netblock'])) {
            $this->netblock = $data['netblock'];
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
