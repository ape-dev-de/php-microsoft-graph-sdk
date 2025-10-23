<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSetting
 */
class WindowsSetting
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The type of setting payloads contained in the instances navigation property. */
    public ?string $payloadType = null;

    /**  */
    public ?WindowsSettingType $settingType = null;

    /** A unique identifier for the device the setting might belong to if it is of the settingType backup. */
    public ?string $windowsDeviceId = null;

    /** 
     * A collection of setting values for a given windowsSetting.
     * @var WindowsSettingInstance[]
     */
    public array $instances = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['payloadType'])) {
            $this->payloadType = $data['payloadType'];
        }
        if (isset($data['settingType'])) {
            $this->settingType = is_array($data['settingType']) ? new WindowsSettingType($data['settingType']) : $data['settingType'];
        }
        if (isset($data['windowsDeviceId'])) {
            $this->windowsDeviceId = $data['windowsDeviceId'];
        }
        if (isset($data['instances'])) {
            $this->instances = $data['instances'];
        }
    }
}
