<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditions
 */
class TermsAndConditions
{
    /**
     * Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&C policy. This is shown to the user on prompts to accept the T&C policy.
     */
    private ?string $acceptanceStatement;

    /**
     * Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&C policy.
     */
    private ?string $bodyText;

    /**
     * DateTime the object was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Administrator-supplied description of the T&C policy.
     */
    private ?string $description;

    /**
     * Administrator-supplied name for the T&C policy.
     */
    private ?string $displayName;

    /**
     * DateTime the object was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&C policy.
     */
    private ?string $title;

    /**
     * Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&C policy.
     */
    private ?float $version;

    /**
     * The list of acceptance statuses for this T&C policy.
     */
    private array $acceptanceStatuses = [];

    /**
     * A termsAndConditions entity represents the metadata and contents of a given Terms and Conditions (T&C) policy. T&C policies’ contents are presented to users upon their first attempt to enroll into Intune and subsequently upon edits where an administrator has required re-acceptance. They enable administrators to communicate the provisions to which a user must agree in order to have devices enrolled into Intune.
     */
    private ?string $assignments;

    public function getAcceptanceStatement(): ?string
    {
        return $this->acceptanceStatement;
    }

    public function setAcceptanceStatement(?string $acceptanceStatement): self
    {
        $this->acceptanceStatement = $acceptanceStatement;
        return $this;
    }

    public function getBodyText(): ?string
    {
        return $this->bodyText;
    }

    public function setBodyText(?string $bodyText): self
    {
        $this->bodyText = $bodyText;
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

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getVersion(): ?float
    {
        return $this->version;
    }

    public function setVersion(?float $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getAcceptanceStatuses(): array
    {
        return $this->acceptanceStatuses;
    }

    public function setAcceptanceStatuses(array $acceptanceStatuses): self
    {
        $this->acceptanceStatuses = $acceptanceStatuses;
        return $this;
    }

    public function getAssignments(): ?string
    {
        return $this->assignments;
    }

    public function setAssignments(?string $assignments): self
    {
        $this->assignments = $assignments;
        return $this;
    }

}
