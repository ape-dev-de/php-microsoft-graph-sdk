<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganization
 */
class ConnectedOrganization
{
    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of the connected organization.
     */
    private ?string $description;

    /**
     * The display name of the connected organization. Supports $filter (eq).
     */
    private ?string $displayName;

    /**
     * The identity sources in this connected organization, one of azureActiveDirectoryTenant, crossCloudAzureActiveDirectoryTenant, domainIdentitySource, externalDomainFederation, or socialIdentitySource. Nullable.
     */
    private array $identitySources = [];

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * The state of a connected organization defines whether assignment policies with requestor scope type AllConfiguredConnectedOrganizationSubjects are applicable or not.  The possible values are: configured, proposed, unknownFutureValue.
     */
    private ?string $state;

    /**
     */
    private array $externalSponsors = [];

    /**
     */
    private ?string $internalSponsors;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIdentitySources(): array
    {
        return $this->identitySources;
    }

    public function setIdentitySources(array $identitySources): self
    {
        $this->identitySources = $identitySources;
        return $this;
    }

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getExternalSponsors(): array
    {
        return $this->externalSponsors;
    }

    public function setExternalSponsors(array $externalSponsors): self
    {
        $this->externalSponsors = $externalSponsors;
        return $this;
    }

    public function getInternalSponsors(): ?string
    {
        return $this->internalSponsors;
    }

    public function setInternalSponsors(?string $internalSponsors): self
    {
        $this->internalSponsors = $internalSponsors;
        return $this;
    }

}
