<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLockerFile
 */
class WindowsInformationProtectionAppLockerFile
{
    /**
     * The friendly name
     */
    private ?string $displayName;

    /**
     * File as a byte array
     */
    private ?string $file;

    /**
     * SHA256 hash of the file
     */
    private ?string $fileHash;

    /**
     * Windows Information Protection AppLocker File
     */
    private ?string $version;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function getFileHash(): ?string
    {
        return $this->fileHash;
    }

    public function setFileHash(?string $fileHash): self
    {
        $this->fileHash = $fileHash;
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
