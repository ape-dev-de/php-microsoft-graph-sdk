<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomTrainingSetting
 */
class CustomTrainingSetting
{
    /**
     * A user collection that specifies to whom the training should be assigned. Possible values are: none, allUsers, clickedPayload, compromised, reportedPhish, readButNotClicked, didNothing, unknownFutureValue.
     */
    private array $assignedTo = [];

    /**
     * The description of the custom training setting.
     */
    private ?string $description;

    /**
     * The display name of the custom training setting.
     */
    private ?string $displayName;

    /**
     * Training duration.
     */
    private ?float $durationInMinutes;

    /**
     * The training URL.
     */
    private ?string $url;


    public function getAssignedTo(): array
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(array $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
