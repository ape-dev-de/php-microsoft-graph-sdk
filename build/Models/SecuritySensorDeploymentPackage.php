<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorDeploymentPackage
 */
class SecuritySensorDeploymentPackage
{
    /**
     * URL to download the sensor deployment package.
     */
    private ?string $downloadUrl;

    /**
     * Version of the sensor.
     */
    private ?string $version;

    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
