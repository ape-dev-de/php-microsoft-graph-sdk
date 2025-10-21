<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSLobApp
 */
class MacOSLobApp
{
    /**
     * The build number of the package. This should match the package CFBundleShortVersionString of the .pkg file.
     */
    private ?string $buildNumber;

    /**
     * The primary bundleId of the package.
     */
    private ?string $bundleId;

    /**
     * List of ComplexType macOSLobChildApp objects. Represents the apps expected to be installed by the package.
     */
    private array $childApps = [];

    /**
     * When TRUE, indicates that the app''s version will NOT be used to detect if the app is installed on a device. When FALSE, indicates that the app''s version will be used to detect if the app is installed on a device. Set this to true for apps that use a self update feature.
     */
    private ?bool $ignoreVersionDetection;

    /**
     * When TRUE, indicates that the app will be installed as managed (requires macOS 11.0 and other managed package restrictions). When FALSE, indicates that the app will be installed as unmanaged.
     */
    private ?bool $installAsManaged;

    /**
     * The MD5 hash codes. This is empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     * @var string[]
     */
    private array $md5Hash = [];

    /**
     * The chunk size for MD5 hash. This is ''0'' or empty if the package was uploaded directly. If the Intune App Wrapping Tool is used to create a .intunemac, this value can be found inside the Detection.xml file.
     */
    private ?float $md5HashChunkSize;

    /**
     * ComplexType macOSMinimumOperatingSystem that indicates the minimum operating system applicable for the application.
     */
    private ?string $minimumSupportedOperatingSystem;

    /**
     * Contains properties and inherited properties for the macOS LOB App.
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

    public function getChildApps(): array
    {
        return $this->childApps;
    }

    public function setChildApps(array $childApps): self
    {
        $this->childApps = $childApps;
        return $this;
    }

    public function getIgnoreVersionDetection(): ?bool
    {
        return $this->ignoreVersionDetection;
    }

    public function setIgnoreVersionDetection(?bool $ignoreVersionDetection): self
    {
        $this->ignoreVersionDetection = $ignoreVersionDetection;
        return $this;
    }

    public function getInstallAsManaged(): ?bool
    {
        return $this->installAsManaged;
    }

    public function setInstallAsManaged(?bool $installAsManaged): self
    {
        $this->installAsManaged = $installAsManaged;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMd5Hash(): array
    {
        return $this->md5Hash;
    }

    /**
     * @param string[] $md5Hash
     */
    public function setMd5Hash(array $md5Hash): self
    {
        $this->md5Hash = $md5Hash;
        return $this;
    }

    public function getMd5HashChunkSize(): ?float
    {
        return $this->md5HashChunkSize;
    }

    public function setMd5HashChunkSize(?float $md5HashChunkSize): self
    {
        $this->md5HashChunkSize = $md5HashChunkSize;
        return $this;
    }

    public function getMinimumSupportedOperatingSystem(): ?string
    {
        return $this->minimumSupportedOperatingSystem;
    }

    public function setMinimumSupportedOperatingSystem(?string $minimumSupportedOperatingSystem): self
    {
        $this->minimumSupportedOperatingSystem = $minimumSupportedOperatingSystem;
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
