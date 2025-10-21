<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceActionResult
 */
class DeviceActionResult
{
    /**
     * Action name
     */
    private ?string $actionName;

    /**
     */
    private ?string $actionState;

    /**
     * Time the action state was last updated
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * Device action result
     */
    private ?\DateTimeInterface $startDateTime;


    public function getActionName(): ?string
    {
        return $this->actionName;
    }

    public function setActionName(?string $actionName): self
    {
        $this->actionName = $actionName;
        return $this;
    }

    public function getActionState(): ?string
    {
        return $this->actionState;
    }

    public function setActionState(?string $actionState): self
    {
        $this->actionState = $actionState;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

}
