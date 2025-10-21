<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserInstallStateSummary
 */
class UserInstallStateSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Failed Device Count. */
        public ?float $failedDeviceCount = null,
        /** Installed Device Count. */
        public ?float $installedDeviceCount = null,
        /** Not installed device count. */
        public ?float $notInstalledDeviceCount = null,
        /** User name. */
        public ?string $userName = null,
        /** @var string[] Contains properties for the installation state summary for a user. */
        public array $deviceStates = []
    ) {}
}
