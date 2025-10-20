<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSetting
 */
class WindowsSetting
{
    /**
     * The type of setting payloads contained in the instances navigation property.
     */
    private ?string $payloadType;

    /**
     */
    private ?string $settingType;

    /**
     * A unique identifier for the device the setting might belong to if it is of the settingType backup.
     */
    private ?string $windowsDeviceId;

    /**
     * A collection of setting values for a given windowsSetting.
     */
    private ?string $instances;

    public function getPayloadType(): ?string
    {
        return $this->payloadType;
    }

    public function setPayloadType(?string $payloadType): self
    {
        $this->payloadType = $payloadType;
        return $this;
    }

    public function getSettingType(): ?string
    {
        return $this->settingType;
    }

    public function setSettingType(?string $settingType): self
    {
        $this->settingType = $settingType;
        return $this;
    }

    public function getWindowsDeviceId(): ?string
    {
        return $this->windowsDeviceId;
    }

    public function setWindowsDeviceId(?string $windowsDeviceId): self
    {
        $this->windowsDeviceId = $windowsDeviceId;
        return $this;
    }

    public function getInstances(): ?string
    {
        return $this->instances;
    }

    public function setInstances(?string $instances): self
    {
        $this->instances = $instances;
        return $this;
    }

}
