<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityUpload
 */
class ImportedWindowsAutopilotDeviceIdentityUpload
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DateTime when the entity is created. */
    public ?\DateTimeInterface $createdDateTimeUtc = null;

    /**  */
    public ?ImportedWindowsAutopilotDeviceIdentityUploadStatus $status = null;

    /** 
     * Collection of all Autopilot devices as a part of this upload.
     * @var ImportedWindowsAutopilotDeviceIdentity[]
     */
    public array $deviceIdentities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTimeUtc'])) {
            $this->createdDateTimeUtc = is_string($data['createdDateTimeUtc']) ? new \DateTimeImmutable($data['createdDateTimeUtc']) : $data['createdDateTimeUtc'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? ImportedWindowsAutopilotDeviceIdentityUploadStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['deviceIdentities'])) {
            $this->deviceIdentities = $data['deviceIdentities'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
