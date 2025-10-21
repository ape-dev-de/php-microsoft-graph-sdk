<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityUpload
 */
class ImportedWindowsAutopilotDeviceIdentityUpload
{
    /**
     * DateTime when the entity is created.
     */
    private ?\DateTimeInterface $createdDateTimeUtc;

    /**
     */
    private ?string $status;

    /**
     * Import windows autopilot devices using upload.
     * @var string[]
     */
    private array $deviceIdentities = [];


    public function getCreatedDateTimeUtc(): ?\DateTimeInterface
    {
        return $this->createdDateTimeUtc;
    }

    public function setCreatedDateTimeUtc(?\DateTimeInterface $createdDateTimeUtc): self
    {
        $this->createdDateTimeUtc = $createdDateTimeUtc;
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

    /**
     * @return string[]
     */
    public function getDeviceIdentities(): array
    {
        return $this->deviceIdentities;
    }

    /**
     * @param string[] $deviceIdentities
     */
    public function setDeviceIdentities(array $deviceIdentities): self
    {
        $this->deviceIdentities = $deviceIdentities;
        return $this;
    }

}
