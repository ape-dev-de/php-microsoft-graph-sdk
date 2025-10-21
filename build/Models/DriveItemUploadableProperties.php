<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemUploadableProperties
 */
class DriveItemUploadableProperties
{
    /**
     * Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
     */
    private ?string $description;

    /**
     * Information about the drive item source. Read-write. Only on OneDrive for Business and SharePoint.
     */
    private ?string $driveItemSource;

    /**
     * Provides an expected file size to perform a quota check before uploading. Only on OneDrive Personal.
     */
    private ?float $fileSize;

    /**
     * File system information on client. Read-write.
     */
    private ?string $fileSystemInfo;

    /**
     * Media source information. Read-write. Only on OneDrive for Business and SharePoint.
     */
    private ?string $mediaSource;

    /**
     * The name of the item (filename and extension). Read-write.
     */
    private ?string $name;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDriveItemSource(): ?string
    {
        return $this->driveItemSource;
    }

    public function setDriveItemSource(?string $driveItemSource): self
    {
        $this->driveItemSource = $driveItemSource;
        return $this;
    }

    public function getFileSize(): ?float
    {
        return $this->fileSize;
    }

    public function setFileSize(?float $fileSize): self
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getFileSystemInfo(): ?string
    {
        return $this->fileSystemInfo;
    }

    public function setFileSystemInfo(?string $fileSystemInfo): self
    {
        $this->fileSystemInfo = $fileSystemInfo;
        return $this;
    }

    public function getMediaSource(): ?string
    {
        return $this->mediaSource;
    }

    public function setMediaSource(?string $mediaSource): self
    {
        $this->mediaSource = $mediaSource;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
