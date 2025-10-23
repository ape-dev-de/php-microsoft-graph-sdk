<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DetectedApp
 */
class DetectedApp
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The number of devices that have installed this application */
    public ?float $deviceCount = null;

    /** Name of the discovered application. Read-only */
    public ?string $displayName = null;

    /**  */
    public ?DetectedAppPlatformType $platform = null;

    /** Indicates the publisher of the discovered application. For example: 'Microsoft'.  The default value is an empty string. */
    public ?string $publisher = null;

    /** Discovered application size in bytes. Read-only */
    public ?float $sizeInByte = null;

    /** Version of the discovered application. Read-only */
    public ?string $version = null;

    /** 
     * The devices that have the discovered application installed
     * @var ManagedDevice[]
     */
    public array $managedDevices = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deviceCount'])) {
            $this->deviceCount = $data['deviceCount'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['platform'])) {
            $this->platform = $data['platform'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['sizeInByte'])) {
            $this->sizeInByte = $data['sizeInByte'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['managedDevices'])) {
            $this->managedDevices = $data['managedDevices'];
        }
    }
}
