<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsSetting
 */
class WindowsSetting
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type of setting payloads contained in the instances navigation property. */
        public ?string $payloadType = null,
        /**  */
        public ?string $settingType = null,
        /** A unique identifier for the device the setting might belong to if it is of the settingType backup. */
        public ?string $windowsDeviceId = null,
        /** A collection of setting values for a given windowsSetting. */
        public array $instances = []
    ) {}
}
