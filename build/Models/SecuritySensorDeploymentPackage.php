<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorDeploymentPackage
 */
class SecuritySensorDeploymentPackage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['downloadUrl'])) {
            $this->downloadUrl = $data['downloadUrl'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
