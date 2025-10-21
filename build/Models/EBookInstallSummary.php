<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EBookInstallSummary
 */
class EBookInstallSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Number of Devices that have failed to install this book. */
        public ?float $failedDeviceCount = null,
        /** Number of Users that have 1 or more device that failed to install this book. */
        public ?float $failedUserCount = null,
        /** Number of Devices that have successfully installed this book. */
        public ?float $installedDeviceCount = null,
        /** Number of Users whose devices have all succeeded to install this book. */
        public ?float $installedUserCount = null,
        /** Number of Devices that does not have this book installed. */
        public ?float $notInstalledDeviceCount = null,
        /** Number of Users that did not install this book. */
        public ?float $notInstalledUserCount = null
    ) {}
}
