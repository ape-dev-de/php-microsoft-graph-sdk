<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorDeploymentPackage
 */
class SecuritySensorDeploymentPackage
{
    /** URL to download the sensor deployment package. */
    public ?string $downloadUrl = null;

    /** Version of the sensor. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['downloadUrl'])) {
            $this->downloadUrl = $data['downloadUrl'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
