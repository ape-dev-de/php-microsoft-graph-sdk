<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostSslCertificate
 */
class SecurityHostSslCertificate
{
    /**
     * The first date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The most recent date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The ports related with this hostSslCertificate.
     */
    private array $ports = [];

    /**
     * The host for this hostSslCertificate.
     */
    private ?string $host;

    /**
     * The sslCertificate for this hostSslCertificate.
     */
    private ?string $sslCertificate;

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

    public function getPorts(): array
    {
        return $this->ports;
    }

    public function setPorts(array $ports): self
    {
        $this->ports = $ports;
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

    public function getSslCertificate(): ?string
    {
        return $this->sslCertificate;
    }

    public function setSslCertificate(?string $sslCertificate): self
    {
        $this->sslCertificate = $sslCertificate;
        return $this;
    }

}
