<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentWorkflowExtension
 */
class AccessPackageAssignmentWorkflowExtension
{
    /**
     * The callback configuration for a custom extension.
     */
    private ?string $callbackConfiguration;

    /**
     * The userPrincipalName of the user or identity of the subject that created this resource. Read-only.
     */
    private ?string $createdBy;

    /**
     * When the entity was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The userPrincipalName of the identity that last modified the entity.
     */
    private ?string $lastModifiedBy;

    /**
     * When the entity was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    public function getCallbackConfiguration(): ?string
    {
        return $this->callbackConfiguration;
    }

    public function setCallbackConfiguration(?string $callbackConfiguration): self
    {
        $this->callbackConfiguration = $callbackConfiguration;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
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

}
