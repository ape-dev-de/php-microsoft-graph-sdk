<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCustodian
 */
class SecurityEdiscoveryCustodian
{
    /**
     * Date and time the custodian acknowledged a hold notification.
     */
    private ?\DateTimeInterface $acknowledgedDateTime;

    /**
     * Email address of the custodian.
     */
    private ?string $email;

    /**
     * Operation entity that represents the latest indexing for the custodian.
     */
    private ?string $lastIndexOperation;

    /**
     * Data source entity for SharePoint sites associated with the custodian.
     */
    private array $siteSources = [];

    /**
     * Data source entity for groups associated with the custodian.
     */
    private array $unifiedGroupSources = [];

    /**
     * Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     */
    private ?string $userSources;

    public function getAcknowledgedDateTime(): ?\DateTimeInterface
    {
        return $this->acknowledgedDateTime;
    }

    public function setAcknowledgedDateTime(?\DateTimeInterface $acknowledgedDateTime): self
    {
        $this->acknowledgedDateTime = $acknowledgedDateTime;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getLastIndexOperation(): ?string
    {
        return $this->lastIndexOperation;
    }

    public function setLastIndexOperation(?string $lastIndexOperation): self
    {
        $this->lastIndexOperation = $lastIndexOperation;
        return $this;
    }

    public function getSiteSources(): array
    {
        return $this->siteSources;
    }

    public function setSiteSources(array $siteSources): self
    {
        $this->siteSources = $siteSources;
        return $this;
    }

    public function getUnifiedGroupSources(): array
    {
        return $this->unifiedGroupSources;
    }

    public function setUnifiedGroupSources(array $unifiedGroupSources): self
    {
        $this->unifiedGroupSources = $unifiedGroupSources;
        return $this;
    }

    public function getUserSources(): ?string
    {
        return $this->userSources;
    }

    public function setUserSources(?string $userSources): self
    {
        $this->userSources = $userSources;
        return $this;
    }

}
