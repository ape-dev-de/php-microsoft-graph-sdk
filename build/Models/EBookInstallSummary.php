<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EBookInstallSummary
 */
class EBookInstallSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of Devices that have failed to install this book. */
    public ?float $failedDeviceCount = null;

    /** Number of Users that have 1 or more device that failed to install this book. */
    public ?float $failedUserCount = null;

    /** Number of Devices that have successfully installed this book. */
    public ?float $installedDeviceCount = null;

    /** Number of Users whose devices have all succeeded to install this book. */
    public ?float $installedUserCount = null;

    /** Number of Devices that does not have this book installed. */
    public ?float $notInstalledDeviceCount = null;

    /** Number of Users that did not install this book. */
    public ?float $notInstalledUserCount = null;


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
            $this->failedDeviceCount = is_numeric($data['failedDeviceCount']) ? (float)$data['failedDeviceCount'] : $data['failedDeviceCount'];
        }
        if (isset($data['failedUserCount'])) {
            $this->failedUserCount = is_numeric($data['failedUserCount']) ? (float)$data['failedUserCount'] : $data['failedUserCount'];
        }
        if (isset($data['installedDeviceCount'])) {
            $this->installedDeviceCount = is_numeric($data['installedDeviceCount']) ? (float)$data['installedDeviceCount'] : $data['installedDeviceCount'];
        }
        if (isset($data['installedUserCount'])) {
            $this->installedUserCount = is_numeric($data['installedUserCount']) ? (float)$data['installedUserCount'] : $data['installedUserCount'];
        }
        if (isset($data['notInstalledDeviceCount'])) {
            $this->notInstalledDeviceCount = is_numeric($data['notInstalledDeviceCount']) ? (float)$data['notInstalledDeviceCount'] : $data['notInstalledDeviceCount'];
        }
        if (isset($data['notInstalledUserCount'])) {
            $this->notInstalledUserCount = is_numeric($data['notInstalledUserCount']) ? (float)$data['notInstalledUserCount'] : $data['notInstalledUserCount'];
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
