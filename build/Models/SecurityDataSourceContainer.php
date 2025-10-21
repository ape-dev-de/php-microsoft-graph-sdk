<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDataSourceContainer
 */
class SecurityDataSourceContainer
{
    /**
     * Created date and time of the dataSourceContainer entity.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Display name of the dataSourceContainer entity.
     */
    private ?string $displayName;

    /**
     * The hold status of the dataSourceContainer. The possible values are: notApplied, applied, applying, removing, partial
     */
    private ?string $holdStatus;

    /**
     * Last modified date and time of the dataSourceContainer.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Date and time that the dataSourceContainer was released from the case.
     */
    private ?\DateTimeInterface $releasedDateTime;

    /**
     * Latest status of the dataSourceContainer. Possible values are: Active, Released.
     */
    private ?string $status;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getHoldStatus(): ?string
    {
        return $this->holdStatus;
    }

    public function setHoldStatus(?string $holdStatus): self
    {
        $this->holdStatus = $holdStatus;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getReleasedDateTime(): ?\DateTimeInterface
    {
        return $this->releasedDateTime;
    }

    public function setReleasedDateTime(?\DateTimeInterface $releasedDateTime): self
    {
        $this->releasedDateTime = $releasedDateTime;
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

}
