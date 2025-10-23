<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityUpload
 */
class ImportedWindowsAutopilotDeviceIdentityUpload
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTimeUtc'])) {
            $this->createdDateTimeUtc = $data['createdDateTimeUtc'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['deviceIdentities'])) {
            $this->deviceIdentities = $data['deviceIdentities'];
        }
    }
}
