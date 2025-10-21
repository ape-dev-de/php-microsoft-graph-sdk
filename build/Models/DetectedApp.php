<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DetectedApp
 */
class DetectedApp
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The number of devices that have installed this application */
        public ?float $deviceCount = null,
        /** Name of the discovered application. Read-only */
        public ?string $displayName = null,
        /**  */
        public ?string $platform = null,
        /** Indicates the publisher of the discovered application. For example: ''Microsoft''.  The default value is an empty string. */
        public ?string $publisher = null,
        /** Discovered application size in bytes. Read-only */
        public ?float $sizeInByte = null,
        /** Version of the discovered application. Read-only */
        public ?string $version = null,
        /** @var string[] A managed or unmanaged app that is installed on a managed device. Unmanaged apps will only appear for devices marked as corporate owned. */
        public array $managedDevices = []
    ) {}
}
