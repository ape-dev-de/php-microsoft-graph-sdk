<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceInstallState
 */
class DeviceInstallState
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Device Id. */
        public ?string $deviceId = null,
        /** Device name. */
        public ?string $deviceName = null,
        /** The error code for install failures. */
        public ?string $errorCode = null,
        /**  */
        public ?string $installState = null,
        /** Last sync date and time. */
        public ?\DateTimeInterface $lastSyncDateTime = null,
        /** OS Description. */
        public ?string $osDescription = null,
        /** OS Version. */
        public ?string $osVersion = null,
        /** Contains properties for the installation state for a device. */
        public ?string $userName = null
    ) {}
}
