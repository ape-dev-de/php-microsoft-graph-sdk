<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHost
 */
class SecurityHost
{
    /**
     * The first date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The most recent date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
     */
    private array $childHostPairs = [];

    /**
     * The hostComponents that are associated with this host.
     */
    private array $components = [];

    /**
     * The hostCookies that are associated with this host.
     */
    private array $cookies = [];

    /**
     * The hostPairs that are associated with this host, where this host is either the parentHost or childHost.
     */
    private array $hostPairs = [];

    /**
     * The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost.
     */
    private array $parentHostPairs = [];

    /**
     * Passive DNS retrieval about this host.
     */
    private array $passiveDns = [];

    /**
     * Reverse passive DNS retrieval about this host.
     */
    private array $passiveDnsReverse = [];

    /**
     * The hostPorts associated with a host.
     */
    private array $ports = [];

    /**
     * Represents a calculated reputation of this host.
     */
    private ?string $reputation;

    /**
     * The hostSslCertificates that are associated with this host.
     */
    private array $sslCertificates = [];

    /**
     * The subdomains that are associated with this host.
     */
    private array $subdomains = [];

    /**
     * The hostTrackers that are associated with this host.
     */
    private array $trackers = [];

    /**
     * The most recent whoisRecord for this host.
     */
    private ?string $whois;


    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
        return $this;
    }

    public function getLastSeenDateTime(): ?\DateTimeInterface
    {
        return $this->lastSeenDateTime;
    }

    public function setLastSeenDateTime(?\DateTimeInterface $lastSeenDateTime): self
    {
        $this->lastSeenDateTime = $lastSeenDateTime;
        return $this;
    }

    public function getChildHostPairs(): array
    {
        return $this->childHostPairs;
    }

    public function setChildHostPairs(array $childHostPairs): self
    {
        $this->childHostPairs = $childHostPairs;
        return $this;
    }

    public function getComponents(): array
    {
        return $this->components;
    }

    public function setComponents(array $components): self
    {
        $this->components = $components;
        return $this;
    }

    public function getCookies(): array
    {
        return $this->cookies;
    }

    public function setCookies(array $cookies): self
    {
        $this->cookies = $cookies;
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

    public function getParentHostPairs(): array
    {
        return $this->parentHostPairs;
    }

    public function setParentHostPairs(array $parentHostPairs): self
    {
        $this->parentHostPairs = $parentHostPairs;
        return $this;
    }

    public function getPassiveDns(): array
    {
        return $this->passiveDns;
    }

    public function setPassiveDns(array $passiveDns): self
    {
        $this->passiveDns = $passiveDns;
        return $this;
    }

    public function getPassiveDnsReverse(): array
    {
        return $this->passiveDnsReverse;
    }

    public function setPassiveDnsReverse(array $passiveDnsReverse): self
    {
        $this->passiveDnsReverse = $passiveDnsReverse;
        return $this;
    }

    public function getPorts(): array
    {
        return $this->ports;
    }

    public function setPorts(array $ports): self
    {
        $this->ports = $ports;
        return $this;
    }

    public function getReputation(): ?string
    {
        return $this->reputation;
    }

    public function setReputation(?string $reputation): self
    {
        $this->reputation = $reputation;
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

    public function getTrackers(): array
    {
        return $this->trackers;
    }

    public function setTrackers(array $trackers): self
    {
        $this->trackers = $trackers;
        return $this;
    }

    public function getWhois(): ?string
    {
        return $this->whois;
    }

    public function setWhois(?string $whois): self
    {
        $this->whois = $whois;
        return $this;
    }

}
