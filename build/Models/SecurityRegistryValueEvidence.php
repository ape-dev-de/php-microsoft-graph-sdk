<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRegistryValueEvidence
 */
class SecurityRegistryValueEvidence
{
    /**
     * A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     */
    private ?string $mdeDeviceId;

    /**
     * Registry hive of the key that the recorded action was applied to.
     */
    private ?string $registryHive;

    /**
     * Registry key that the recorded action was applied to.
     */
    private ?string $registryKey;

    /**
     * Data of the registry value that the recorded action was applied to.
     */
    private ?string $registryValue;

    /**
     * Name of the registry value that the recorded action was applied to.
     */
    private ?string $registryValueName;

    /**
     * Data type, such as binary or string, of the registry value that the recorded action was applied to.
     */
    private ?string $registryValueType;


    public function getMdeDeviceId(): ?string
    {
        return $this->mdeDeviceId;
    }

    public function setMdeDeviceId(?string $mdeDeviceId): self
    {
        $this->mdeDeviceId = $mdeDeviceId;
        return $this;
    }

    public function getRegistryHive(): ?string
    {
        return $this->registryHive;
    }

    public function setRegistryHive(?string $registryHive): self
    {
        $this->registryHive = $registryHive;
        return $this;
    }

    public function getRegistryKey(): ?string
    {
        return $this->registryKey;
    }

    public function setRegistryKey(?string $registryKey): self
    {
        $this->registryKey = $registryKey;
        return $this;
    }

    public function getRegistryValue(): ?string
    {
        return $this->registryValue;
    }

    public function setRegistryValue(?string $registryValue): self
    {
        $this->registryValue = $registryValue;
        return $this;
    }

    public function getRegistryValueName(): ?string
    {
        return $this->registryValueName;
    }

    public function setRegistryValueName(?string $registryValueName): self
    {
        $this->registryValueName = $registryValueName;
        return $this;
    }

    public function getRegistryValueType(): ?string
    {
        return $this->registryValueType;
    }

    public function setRegistryValueType(?string $registryValueType): self
    {
        $this->registryValueType = $registryValueType;
        return $this;
    }

}
