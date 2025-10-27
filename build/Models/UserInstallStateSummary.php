<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserInstallStateSummary
 */
class UserInstallStateSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Failed Device Count. */
    public ?float $failedDeviceCount = null;

    /** Installed Device Count. */
    public ?float $installedDeviceCount = null;

    /** Not installed device count. */
    public ?float $notInstalledDeviceCount = null;

    /** User name. */
    public ?string $userName = null;

    /** 
     * The install state of the eBook.
     * @var DeviceInstallState[]
     */
    public array $deviceStates = [];


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
        if (isset($data['failedDeviceCount'])) {
            $this->failedDeviceCount = $data['failedDeviceCount'];
        }
        if (isset($data['installedDeviceCount'])) {
            $this->installedDeviceCount = $data['installedDeviceCount'];
        }
        if (isset($data['notInstalledDeviceCount'])) {
            $this->notInstalledDeviceCount = $data['notInstalledDeviceCount'];
        }
        if (isset($data['userName'])) {
            $this->userName = $data['userName'];
        }
        if (isset($data['deviceStates'])) {
            $this->deviceStates = $data['deviceStates'];
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
