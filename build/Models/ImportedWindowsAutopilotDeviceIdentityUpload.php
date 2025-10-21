<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityUpload
 */
class ImportedWindowsAutopilotDeviceIdentityUpload
{
    public function __construct(
        /** DateTime when the entity is created. */
        public ?\DateTimeInterface $createdDateTimeUtc = null,
        /**  */
        public ?string $status = null,
        /** @var string[] Import windows autopilot devices using upload. */
        public array $deviceIdentities = []
    ) {}
}
