<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSimulationEventInfo
 */
class UserSimulationEventInfo
{
    public function __construct(
        /** Browser information from where the simulation event was initiated by a user in an attack simulation and training campaign. */
        public ?string $browser = null,
        /**  */
        public ?ClickSource $clickSource = null,
        /** Date and time of the simulation event by a user in an attack simulation and training campaign. */
        public ?\DateTimeInterface $eventDateTime = null,
        /** Name of the simulation event by a user in an attack simulation and training campaign. */
        public ?string $eventName = null,
        /** IP address from where the simulation event was initiated by a user in an attack simulation and training campaign. */
        public ?string $ipAddress = null,
        /** The operating system, platform, and device details from where the simulation event was initiated by a user in an attack simulation and training campaign. */
        public ?string $osPlatformDeviceDetails = null
    ) {}
}
