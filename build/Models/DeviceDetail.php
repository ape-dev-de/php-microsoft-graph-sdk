<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceDetail
 */
class DeviceDetail
{
    public function __construct(
        /** Indicates the browser information of the used in the sign-in. Populated for devices registered in Microsoft Entra. */
        public ?string $browser = null,
        /** Refers to the unique ID of the device used in the sign-in. Populated for devices registered in Microsoft Entra. */
        public ?string $deviceId = null,
        /** Refers to the name of the device used in the sign-in. Populated for devices registered in Microsoft Entra. */
        public ?string $displayName = null,
        /** Indicates whether the device is compliant or not. */
        public ?bool $isCompliant = null,
        /** Indicates if the device is managed or not. */
        public ?bool $isManaged = null,
        /** Indicates the OS name and version used in the sign-in. */
        public ?string $operatingSystem = null,
        /** Indicates information on whether the device used in the sign-in is workplace-joined, Microsoft Entra-joined, domain-joined. */
        public ?string $trustType = null
    ) {}
}
