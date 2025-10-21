<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobChildApp
 */
class MacOSLobChildApp
{
    /**
     * The build number of the app.
     */
    private ?string $buildNumber;

    /**
     * The bundleId of the app.
     */
    private ?string $bundleId;

    /**
     * Contains properties of a macOS .app in the package
     */
    private ?string $versionNumber;


    public function getBuildNumber(): ?string
    {
        return $this->buildNumber;
    }

    public function setBuildNumber(?string $buildNumber): self
    {
        $this->buildNumber = $buildNumber;
        return $this;
    }

    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    public function setBundleId(?string $bundleId): self
    {
        $this->bundleId = $bundleId;
        return $this;
    }

    public function getVersionNumber(): ?string
    {
        return $this->versionNumber;
    }

    public function setVersionNumber(?string $versionNumber): self
    {
        $this->versionNumber = $versionNumber;
        return $this;
    }

}
