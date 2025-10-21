<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitlockerRecoveryKey
 */
class BitlockerRecoveryKey
{
    /**
     * The date and time when the key was originally backed up to Microsoft Entra ID. Not nullable.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Identifier of the device the BitLocker key is originally backed up from. Supports $filter (eq).
     */
    private ?string $deviceId;

    /**
     * The BitLocker recovery key. Returned only on $select. Not nullable.
     */
    private ?string $key;

    /**
     * Indicates the type of volume the BitLocker key is associated with. The possible values are: 1 (for operatingSystemVolume), 2 (for fixedDataVolume), 3 (for removableDataVolume), and 4 (for unknownFutureValue).
     */
    private ?string $volumeType;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getVolumeType(): ?string
    {
        return $this->volumeType;
    }

    public function setVolumeType(?string $volumeType): self
    {
        $this->volumeType = $volumeType;
        return $this;
    }

}
