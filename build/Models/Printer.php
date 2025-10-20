<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Printer
 */
class Printer
{
    /**
     * True if the printer has a physical device for printing. Read-only.
     */
    private ?bool $hasPhysicalDevice;

    /**
     * True if the printer is shared; false otherwise. Read-only.
     */
    private ?bool $isShared;

    /**
     * The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The DateTimeOffset when the printer was registered. Read-only.
     */
    private ?\DateTimeInterface $registeredDateTime;

    /**
     * The connectors that are associated with the printer.
     */
    private array $connectors = [];

    /**
     * The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
     */
    private array $shares = [];

    /**
     * A list of task triggers that are associated with the printer.
     */
    private ?string $taskTriggers;

    public function getHasPhysicalDevice(): ?bool
    {
        return $this->hasPhysicalDevice;
    }

    public function setHasPhysicalDevice(?bool $hasPhysicalDevice): self
    {
        $this->hasPhysicalDevice = $hasPhysicalDevice;
        return $this;
    }

    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;
        return $this;
    }

    public function getLastSeenDateTime(): ?\DateTimeInterface
    {
        return $this->lastSeenDateTime;
    }

    public function setLastSeenDateTime(?\DateTimeInterface $lastSeenDateTime): self
    {
        $this->lastSeenDateTime = $lastSeenDateTime;
        return $this;
    }

    public function getRegisteredDateTime(): ?\DateTimeInterface
    {
        return $this->registeredDateTime;
    }

    public function setRegisteredDateTime(?\DateTimeInterface $registeredDateTime): self
    {
        $this->registeredDateTime = $registeredDateTime;
        return $this;
    }

    public function getConnectors(): array
    {
        return $this->connectors;
    }

    public function setConnectors(array $connectors): self
    {
        $this->connectors = $connectors;
        return $this;
    }

    public function getShares(): array
    {
        return $this->shares;
    }

    public function setShares(array $shares): self
    {
        $this->shares = $shares;
        return $this;
    }

    public function getTaskTriggers(): ?string
    {
        return $this->taskTriggers;
    }

    public function setTaskTriggers(?string $taskTriggers): self
    {
        $this->taskTriggers = $taskTriggers;
        return $this;
    }

}
