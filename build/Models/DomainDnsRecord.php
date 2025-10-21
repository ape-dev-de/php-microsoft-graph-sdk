<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsRecord
 */
class DomainDnsRecord
{
    /**
     * If false, the customer must configure this record at the DNS host for Microsoft Online Services to operate correctly with the domain.
     */
    private ?bool $isOptional;

    /**
     * Value used when configuring the name of the DNS record at the DNS host.
     */
    private ?string $label;

    /**
     * Indicates what type of DNS record this entity represents. The value can be CName, Mx, Srv, or Txt.
     */
    private ?string $recordType;

    /**
     * Microsoft Online Service or feature that has a dependency on this DNS record. Can be one of the following values: null, Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune.
     */
    private ?string $supportedService;

    /**
     * Value to use when configuring the time-to-live (ttl) property of the DNS record at the DNS host. Not nullable.
     */
    private ?string $ttl;


    public function getIsOptional(): ?bool
    {
        return $this->isOptional;
    }

    public function setIsOptional(?bool $isOptional): self
    {
        $this->isOptional = $isOptional;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getRecordType(): ?string
    {
        return $this->recordType;
    }

    public function setRecordType(?string $recordType): self
    {
        $this->recordType = $recordType;
        return $this;
    }

    public function getSupportedService(): ?string
    {
        return $this->supportedService;
    }

    public function setSupportedService(?string $supportedService): self
    {
        $this->supportedService = $supportedService;
        return $this;
    }

    public function getTtl(): ?string
    {
        return $this->ttl;
    }

    public function setTtl(?string $ttl): self
    {
        $this->ttl = $ttl;
        return $this;
    }

}
