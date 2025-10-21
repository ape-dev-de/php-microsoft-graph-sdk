<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFileEvidence
 */
class SecurityFileEvidence
{
    public function __construct(
        /** The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue. */
        public ?string $detectionStatus = null,
        /** The file details. */
        public ?string $fileDetails = null,
        /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
        public ?string $mdeDeviceId = null
    ) {}
}
