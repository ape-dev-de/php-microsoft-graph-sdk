<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPort
 */
class SecurityHostPort
{
    /**
     * The hostPortBanners retrieved from scanning the port.
     */
    private array $banners = [];

    /**
     * The first date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The last date and time when Microsoft Defender Threat Intelligence scanned the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastScanDateTime;

    /**
     * The last date and time when Microsoft Defender Threat Intelligence observed the hostPort. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The numerical identifier of the port which is standardized across the internet.
     */
    private ?float $port;

    /**
     * The general protocol used to scan the port. The possible values are: tcp, udp, unknownFutureValue.
     */
    private ?string $protocol;

    /**
     * The hostPortComponents retrieved from scanning the port.
     */
    private array $services = [];

    /**
     * The status of the port. The possible values are: open, filtered, closed, unknownFutureValue.
     */
    private ?string $status;

    /**
     * The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPort in all its scans.
     */
    private ?float $timesObserved;

    /**
     */
    private ?string $host;

    /**
     * The most recent sslCertificate used to communicate on the port.
     */
    private ?string $mostRecentSslCertificate;

    public function getBanners(): array
    {
        return $this->banners;
    }

    public function setBanners(array $banners): self
    {
        $this->banners = $banners;
        return $this;
    }

    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
        return $this;
    }

    public function getLastScanDateTime(): ?\DateTimeInterface
    {
        return $this->lastScanDateTime;
    }

    public function setLastScanDateTime(?\DateTimeInterface $lastScanDateTime): self
    {
        $this->lastScanDateTime = $lastScanDateTime;
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

    public function getPort(): ?float
    {
        return $this->port;
    }

    public function setPort(?float $port): self
    {
        $this->port = $port;
        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function getServices(): array
    {
        return $this->services;
    }

    public function setServices(array $services): self
    {
        $this->services = $services;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getTimesObserved(): ?float
    {
        return $this->timesObserved;
    }

    public function setTimesObserved(?float $timesObserved): self
    {
        $this->timesObserved = $timesObserved;
        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;
        return $this;
    }

    public function getMostRecentSslCertificate(): ?string
    {
        return $this->mostRecentSslCertificate;
    }

    public function setMostRecentSslCertificate(?string $mostRecentSslCertificate): self
    {
        $this->mostRecentSslCertificate = $mostRecentSslCertificate;
        return $this;
    }

}
