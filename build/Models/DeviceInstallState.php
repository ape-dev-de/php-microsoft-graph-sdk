<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceInstallState
 */
class DeviceInstallState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Device Id. */
    public ?string $deviceId = null;

    /** Device name. */
    public ?string $deviceName = null;

    /** The error code for install failures. */
    public ?string $errorCode = null;

    /**  */
    public ?InstallState $installState = null;

    /** Last sync date and time. */
    public ?\DateTimeInterface $lastSyncDateTime = null;

    /** OS Description. */
    public ?string $osDescription = null;

    /** OS Version. */
    public ?string $osVersion = null;

    /** Device User Name. */
    public ?string $userName = null;


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
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceName'])) {
            $this->deviceName = $data['deviceName'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
        if (isset($data['installState'])) {
            $this->installState = is_string($data['installState']) ? InstallState::tryFrom($data['installState']) : $data['installState'];
        }
        if (isset($data['lastSyncDateTime'])) {
            $this->lastSyncDateTime = is_string($data['lastSyncDateTime']) ? new \DateTimeImmutable($data['lastSyncDateTime']) : $data['lastSyncDateTime'];
        }
        if (isset($data['osDescription'])) {
            $this->osDescription = $data['osDescription'];
        }
        if (isset($data['osVersion'])) {
            $this->osVersion = $data['osVersion'];
        }
        if (isset($data['userName'])) {
            $this->userName = $data['userName'];
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
