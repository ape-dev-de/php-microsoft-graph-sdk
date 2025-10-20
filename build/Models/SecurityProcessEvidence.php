<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityProcessEvidence
 */
class SecurityProcessEvidence
{
    /**
     * The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     */
    private ?string $detectionStatus;

    /**
     * Image file details.
     */
    private ?string $imageFile;

    /**
     * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     */
    private ?string $mdeDeviceId;

    /**
     * Date and time when the parent of the process was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $parentProcessCreationDateTime;

    /**
     * Process ID (PID) of the parent process that spawned the process.
     */
    private ?float $parentProcessId;

    /**
     * Parent process image file details.
     */
    private ?string $parentProcessImageFile;

    /**
     * Command line used to create the new process.
     */
    private ?string $processCommandLine;

    /**
     * Date and time when the process was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $processCreationDateTime;

    /**
     * Process ID (PID) of the newly created process.
     */
    private ?float $processId;

    /**
     * User details of the user that ran the process.
     */
    private ?string $userAccount;

    public function getDetectionStatus(): ?string
    {
        return $this->detectionStatus;
    }

    public function setDetectionStatus(?string $detectionStatus): self
    {
        $this->detectionStatus = $detectionStatus;
        return $this;
    }

    public function getImageFile(): ?string
    {
        return $this->imageFile;
    }

    public function setImageFile(?string $imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    public function getMdeDeviceId(): ?string
    {
        return $this->mdeDeviceId;
    }

    public function setMdeDeviceId(?string $mdeDeviceId): self
    {
        $this->mdeDeviceId = $mdeDeviceId;
        return $this;
    }

    public function getParentProcessCreationDateTime(): ?\DateTimeInterface
    {
        return $this->parentProcessCreationDateTime;
    }

    public function setParentProcessCreationDateTime(?\DateTimeInterface $parentProcessCreationDateTime): self
    {
        $this->parentProcessCreationDateTime = $parentProcessCreationDateTime;
        return $this;
    }

    public function getParentProcessId(): ?float
    {
        return $this->parentProcessId;
    }

    public function setParentProcessId(?float $parentProcessId): self
    {
        $this->parentProcessId = $parentProcessId;
        return $this;
    }

    public function getParentProcessImageFile(): ?string
    {
        return $this->parentProcessImageFile;
    }

    public function setParentProcessImageFile(?string $parentProcessImageFile): self
    {
        $this->parentProcessImageFile = $parentProcessImageFile;
        return $this;
    }

    public function getProcessCommandLine(): ?string
    {
        return $this->processCommandLine;
    }

    public function setProcessCommandLine(?string $processCommandLine): self
    {
        $this->processCommandLine = $processCommandLine;
        return $this;
    }

    public function getProcessCreationDateTime(): ?\DateTimeInterface
    {
        return $this->processCreationDateTime;
    }

    public function setProcessCreationDateTime(?\DateTimeInterface $processCreationDateTime): self
    {
        $this->processCreationDateTime = $processCreationDateTime;
        return $this;
    }

    public function getProcessId(): ?float
    {
        return $this->processId;
    }

    public function setProcessId(?float $processId): self
    {
        $this->processId = $processId;
        return $this;
    }

    public function getUserAccount(): ?string
    {
        return $this->userAccount;
    }

    public function setUserAccount(?string $userAccount): self
    {
        $this->userAccount = $userAccount;
        return $this;
    }

}
