<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingContentEventInfo
 */
class UserTrainingContentEventInfo
{
    public function __construct(
        /** Browser of the user from where the training event was generated. */
        public ?string $browser = null,
        /** Date and time of the training content playback by the user. */
        public ?\DateTimeInterface $contentDateTime = null,
        /** IP address of the user for the training event. */
        public ?string $ipAddress = null,
        /** The operating system, platform, and device details of the user for the training event. */
        public ?string $osPlatformDeviceDetails = null,
        /** Potential improvement in the tenant security posture after completion of the training by the user. */
        public ?string $potentialScoreImpact = null
    ) {}
}
