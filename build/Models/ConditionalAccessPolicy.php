<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPolicy
 */
class ConditionalAccessPolicy
{
    /**
     */
    private ?string $conditions;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     */
    private ?string $description;

    /**
     * Specifies a display name for the conditionalAccessPolicy object.
     */
    private ?string $displayName;

    /**
     * Specifies the grant controls that must be fulfilled to pass the policy.
     */
    private ?string $grantControls;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * Specifies the session controls that are enforced after sign-in.
     */
    private ?string $sessionControls;

    /**
     */
    private ?string $state;

    /**
     * Specifies the unique identifier of a Conditional Access template. Inherited from entity.
     */
    private ?string $templateId;


    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;
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

    public function getGrantControls(): ?string
    {
        return $this->grantControls;
    }

    public function setGrantControls(?string $grantControls): self
    {
        $this->grantControls = $grantControls;
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

    public function getSessionControls(): ?string
    {
        return $this->sessionControls;
    }

    public function setSessionControls(?string $sessionControls): self
    {
        $this->sessionControls = $sessionControls;
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

    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }

    public function setTemplateId(?string $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

}
