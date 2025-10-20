<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentConfiguration
 */
class DeviceEnrollmentConfiguration
{
    /**
     * Created date time in UTC of the device enrollment configuration
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of the device enrollment configuration
     */
    private ?string $description;

    /**
     * The display name of the device enrollment configuration
     */
    private ?string $displayName;

    /**
     * Last modified date time in UTC of the device enrollment configuration
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Priority is used when a user exists in multiple groups that are assigned enrollment configuration. Users are subject only to the configuration with the lowest priority value.
     */
    private ?float $priority;

    /**
     * The version of the device enrollment configuration
     */
    private ?float $version;

    /**
     * The Base Class of Device Enrollment Configuration
     */
    private ?string $assignments;

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

    public function getPriority(): ?float
    {
        return $this->priority;
    }

    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;
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
