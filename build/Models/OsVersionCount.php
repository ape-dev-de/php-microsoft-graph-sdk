<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OsVersionCount
 */
class OsVersionCount
{
    public function __construct(
        /** Count of devices with malware for the OS version */
        public ?float $deviceCount = null,
        /** The Timestamp of the last update for the device count in UTC */
        public ?\DateTimeInterface $lastUpdateDateTime = null,
        /** OS version */
        public ?string $osVersion = null
    ) {}
}
