<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisBaseRecord
 */
class SecurityWhoisBaseRecord
{
    /**
     * The contact information for the abuse contact.
     */
    private ?string $abuse;

    /**
     * The contact information for the admin contact.
     */
    private ?string $admin;

    /**
     * The contact information for the billing contact.
     */
    private ?string $billing;

    /**
     * The domain status for this WHOIS object.
     */
    private ?string $domainStatus;

    /**
     * The date and time when this WHOIS record expires with the registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * The first seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The last seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The date and time when this WHOIS record was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdateDateTime;

    /**
     * The nameservers for this WHOIS object.
     */
    private array $nameservers = [];

    /**
     * The contact information for the noc contact.
     */
    private ?string $noc;

    /**
     * The raw WHOIS details for this WHOIS object.
     */
    private ?string $rawWhoisText;

    /**
     * The contact information for the registrant contact.
     */
    private ?string $registrant;

    /**
     * The contact information for the registrar contact.
     */
    private ?string $registrar;

    /**
     * The date and time when this WHOIS record was registered with a registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $registrationDateTime;

    /**
     * The contact information for the technical contact.
     */
    private ?string $technical;

    /**
     * The WHOIS server that provides the details.
     */
    private ?string $whoisServer;

    /**
     * The contact information for the zone contact.
     */
    private ?string $zone;

    /**
     */
    private ?string $host;

    public function getAbuse(): ?string
    {
        return $this->abuse;
    }

    public function setAbuse(?string $abuse): self
    {
        $this->abuse = $abuse;
        return $this;
    }

    public function getAdmin(): ?string
    {
        return $this->admin;
    }

    public function setAdmin(?string $admin): self
    {
        $this->admin = $admin;
        return $this;
    }

    public function getBilling(): ?string
    {
        return $this->billing;
    }

    public function setBilling(?string $billing): self
    {
        $this->billing = $billing;
        return $this;
    }

    public function getDomainStatus(): ?string
    {
        return $this->domainStatus;
    }

    public function setDomainStatus(?string $domainStatus): self
    {
        $this->domainStatus = $domainStatus;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
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

    public function getLastSeenDateTime(): ?\DateTimeInterface
    {
        return $this->lastSeenDateTime;
    }

    public function setLastSeenDateTime(?\DateTimeInterface $lastSeenDateTime): self
    {
        $this->lastSeenDateTime = $lastSeenDateTime;
        return $this;
    }

    public function getLastUpdateDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdateDateTime;
    }

    public function setLastUpdateDateTime(?\DateTimeInterface $lastUpdateDateTime): self
    {
        $this->lastUpdateDateTime = $lastUpdateDateTime;
        return $this;
    }

    public function getNameservers(): array
    {
        return $this->nameservers;
    }

    public function setNameservers(array $nameservers): self
    {
        $this->nameservers = $nameservers;
        return $this;
    }

    public function getNoc(): ?string
    {
        return $this->noc;
    }

    public function setNoc(?string $noc): self
    {
        $this->noc = $noc;
        return $this;
    }

    public function getRawWhoisText(): ?string
    {
        return $this->rawWhoisText;
    }

    public function setRawWhoisText(?string $rawWhoisText): self
    {
        $this->rawWhoisText = $rawWhoisText;
        return $this;
    }

    public function getRegistrant(): ?string
    {
        return $this->registrant;
    }

    public function setRegistrant(?string $registrant): self
    {
        $this->registrant = $registrant;
        return $this;
    }

    public function getRegistrar(): ?string
    {
        return $this->registrar;
    }

    public function setRegistrar(?string $registrar): self
    {
        $this->registrar = $registrar;
        return $this;
    }

    public function getRegistrationDateTime(): ?\DateTimeInterface
    {
        return $this->registrationDateTime;
    }

    public function setRegistrationDateTime(?\DateTimeInterface $registrationDateTime): self
    {
        $this->registrationDateTime = $registrationDateTime;
        return $this;
    }

    public function getTechnical(): ?string
    {
        return $this->technical;
    }

    public function setTechnical(?string $technical): self
    {
        $this->technical = $technical;
        return $this;
    }

    public function getWhoisServer(): ?string
    {
        return $this->whoisServer;
    }

    public function setWhoisServer(?string $whoisServer): self
    {
        $this->whoisServer = $whoisServer;
        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->zone = $zone;
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
