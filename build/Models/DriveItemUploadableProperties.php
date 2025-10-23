<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemUploadableProperties
 */
class DriveItemUploadableProperties
{
    /** Provides a user-visible description of the item. Read-write. Only on OneDrive Personal. */
    public ?string $description = null;

    /** 
     * Information about the drive item source. Read-write. Only on OneDrive for Business and SharePoint.
     * @var DriveItemSource|\stdClass|null
     */
    public mixed $driveItemSource = null;

    /** Provides an expected file size to perform a quota check before uploading. Only on OneDrive Personal. */
    public ?float $fileSize = null;

    /** 
     * File system information on client. Read-write.
     * @var FileSystemInfo|\stdClass|null
     */
    public mixed $fileSystemInfo = null;

    /** 
     * Media source information. Read-write. Only on OneDrive for Business and SharePoint.
     * @var MediaSource|\stdClass|null
     */
    public mixed $mediaSource = null;

    /** The name of the item (filename and extension). Read-write. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['driveItemSource'])) {
            $this->driveItemSource = $data['driveItemSource'];
        }
        if (isset($data['fileSize'])) {
            $this->fileSize = $data['fileSize'];
        }
        if (isset($data['fileSystemInfo'])) {
            $this->fileSystemInfo = $data['fileSystemInfo'];
        }
        if (isset($data['mediaSource'])) {
            $this->mediaSource = $data['mediaSource'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
