<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisNameserver
 */
class SecurityWhoisNameserver
{
    /**
     * The first seen date and time of this WHOIS contact. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The last seen date and time of this WHOIS contact. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     */
    private ?string $host;


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

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;
        return $this;
    }

}
