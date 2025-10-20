<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEvent
 */
class VirtualEvent
{
    /**
     * The identity information for the creator of the virtual event. Inherited from virtualEvent.
     */
    private ?string $createdBy;

    /**
     * A description of the virtual event.
     */
    private ?string $description;

    /**
     * The display name of the virtual event.
     */
    private ?string $displayName;

    /**
     * The end time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     */
    private ?string $endDateTime;

    /**
     * The external information of a virtual event. Returned only for event organizers or coorganizers; otherwise, null.
     */
    private array $externalEventInformation = [];

    /**
     * The virtual event settings.
     */
    private ?string $settings;

    /**
     * Start time of the virtual event. The timeZone property can be set to any of the time zones currently supported by Windows. For details on how to get all available time zones using PowerShell, see Get-TimeZone.
     */
    private ?string $startDateTime;

    /**
     * The status of the virtual event. The possible values are: draft, published, canceled, and unknownFutureValue.
     */
    private ?string $status;

    /**
     * The virtual event presenters.
     */
    private array $presenters = [];

    /**
     * The sessions for the virtual event.
     */
    private ?string $sessions;

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getEndDateTime(): ?string
    {
        return $this->endDateTime;
    }

    public function setEndDateTime(?string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    public function getExternalEventInformation(): array
    {
        return $this->externalEventInformation;
    }

    public function setExternalEventInformation(array $externalEventInformation): self
    {
        $this->externalEventInformation = $externalEventInformation;
        return $this;
    }

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
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

    public function getPresenters(): array
    {
        return $this->presenters;
    }

    public function setPresenters(array $presenters): self
    {
        $this->presenters = $presenters;
        return $this;
    }

    public function getSessions(): ?string
    {
        return $this->sessions;
    }

    public function setSessions(?string $sessions): self
    {
        $this->sessions = $sessions;
        return $this;
    }

}
