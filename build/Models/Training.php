<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Training
 */
class Training
{
    /**
     * Training availability status. Possible values are: unknown, notAvailable, available, archive, delete, unknownFutureValue.
     */
    private ?string $availabilityStatus;

    /**
     * Identity of the user who created the training.
     */
    private ?string $createdBy;

    /**
     * Date and time when the training was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description for the training.
     */
    private ?string $description;

    /**
     * The display name for the training.
     */
    private ?string $displayName;

    /**
     * Training duration.
     */
    private ?float $durationInMinutes;

    /**
     * Indicates whether the training has any evaluation.
     */
    private ?bool $hasEvaluation;

    /**
     * Identity of the user who last modified the training.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time when the training was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Training content source. Possible values are: unknown, global, tenant, unknownFutureValue.
     */
    private ?string $source;

    /**
     * Supported locales for content for the associated training.
     * @var string[]
     */
    private array $supportedLocales = [];

    /**
     * Training tags.
     * @var string[]
     */
    private array $tags = [];

    /**
     * The type of training. Possible values are: unknown, phishing, unknownFutureValue.
     */
    private ?string $type;

    /**
     * Language specific details on a training.
     * @var string[]
     */
    private array $languageDetails = [];


    public function getAvailabilityStatus(): ?string
    {
        return $this->availabilityStatus;
    }

    public function setAvailabilityStatus(?string $availabilityStatus): self
    {
        $this->availabilityStatus = $availabilityStatus;
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

    public function getDurationInMinutes(): ?float
    {
        return $this->durationInMinutes;
    }

    public function setDurationInMinutes(?float $durationInMinutes): self
    {
        $this->durationInMinutes = $durationInMinutes;
        return $this;
    }

    public function getHasEvaluation(): ?bool
    {
        return $this->hasEvaluation;
    }

    public function setHasEvaluation(?bool $hasEvaluation): self
    {
        $this->hasEvaluation = $hasEvaluation;
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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSupportedLocales(): array
    {
        return $this->supportedLocales;
    }

    /**
     * @param string[] $supportedLocales
     */
    public function setSupportedLocales(array $supportedLocales): self
    {
        $this->supportedLocales = $supportedLocales;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLanguageDetails(): array
    {
        return $this->languageDetails;
    }

    /**
     * @param string[] $languageDetails
     */
    public function setLanguageDetails(array $languageDetails): self
    {
        $this->languageDetails = $languageDetails;
        return $this;
    }

}
