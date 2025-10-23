<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitlockerRecoveryKey
 */
class BitlockerRecoveryKey
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when the key was originally backed up to Microsoft Entra ID. Not nullable. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Identifier of the device the BitLocker key is originally backed up from. Supports $filter (eq). */
    public ?string $deviceId = null;

    /** The BitLocker recovery key. Returned only on $select. Not nullable. */
    public ?string $key = null;

    /** 
     * Indicates the type of volume the BitLocker key is associated with. The possible values are: 1 (for operatingSystemVolume), 2 (for fixedDataVolume), 3 (for removableDataVolume), and 4 (for unknownFutureValue).
     * @var VolumeType|\stdClass|null
     */
    public mixed $volumeType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['key'])) {
            $this->key = $data['key'];
        }
        if (isset($data['volumeType'])) {
            $this->volumeType = $data['volumeType'];
        }
    }
}
