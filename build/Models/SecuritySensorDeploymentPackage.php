<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorDeploymentPackage
 */
class SecuritySensorDeploymentPackage
{
    public function __construct(
        /** URL to download the sensor deployment package. */
        public ?string $downloadUrl = null,
        /** Version of the sensor. */
        public ?string $version = null
    ) {}
}
