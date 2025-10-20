<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSIncludedApp
 */
class MacOSIncludedApp
{
    /**
     * The bundleId of the app. This maps to the CFBundleIdentifier in the app's bundle configuration.
     */
    private ?string $bundleId;

    /**
     * Contains properties of an included .app in a MacOS app.
     */
    private ?string $bundleVersion;

    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    public function setBundleId(?string $bundleId): self
    {
        $this->bundleId = $bundleId;
        return $this;
    }

    public function getBundleVersion(): ?string
    {
        return $this->bundleVersion;
    }

    public function setBundleVersion(?string $bundleVersion): self
    {
        $this->bundleVersion = $bundleVersion;
        return $this;
    }

}
