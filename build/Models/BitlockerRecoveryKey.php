<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BitlockerRecoveryKey
 */
class BitlockerRecoveryKey
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time when the key was originally backed up to Microsoft Entra ID. Not nullable. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Identifier of the device the BitLocker key is originally backed up from. Supports $filter (eq). */
        public ?string $deviceId = null,
        /** The BitLocker recovery key. Returned only on $select. Not nullable. */
        public ?string $key = null,
        /** Indicates the type of volume the BitLocker key is associated with. The possible values are: 1 (for operatingSystemVolume), 2 (for fixedDataVolume), 3 (for removableDataVolume), and 4 (for unknownFutureValue). */
        public ?VolumeType $volumeType = null
    ) {}
}
