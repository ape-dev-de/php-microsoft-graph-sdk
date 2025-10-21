<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSCustomConfiguration
 */
class MacOSCustomConfiguration
{
    public function __construct(
        /** Payload. (UTF8 encoded byte array) */
        public ?string $payload = null,
        /** Payload file name (.mobileconfig */
        public ?string $payloadFileName = null,
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the macOSCustomConfiguration resource. */
        public ?string $payloadName = null
    ) {}
}
