<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtension
 */
class IdentityGovernanceCustomTaskExtension
{
    /**
     * The callback configuration for a custom task extension.
     */
    private ?string $callbackConfiguration;

    /**
     * When the custom task extension was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * When the custom extension was last modified.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The unique identifier of the Microsoft Entra user that created the custom task extension.Supports $filter(eq, ne) and $expand.
     */
    private ?string $createdBy;

    /**
     * The unique identifier of the Microsoft Entra user that modified the custom task extension last.Supports $filter(eq, ne) and $expand.
     */
    private ?string $lastModifiedBy;


    public function getCallbackConfiguration(): ?string
    {
        return $this->callbackConfiguration;
    }

    public function setCallbackConfiguration(?string $callbackConfiguration): self
    {
        $this->callbackConfiguration = $callbackConfiguration;
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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

}
