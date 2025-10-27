<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemUploadableProperties
 */
class DriveItemUploadableProperties
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['driveItemSource'])) {
            $this->driveItemSource = is_array($data['driveItemSource']) ? new DriveItemSource($data['driveItemSource']) : $data['driveItemSource'];
        }
        if (isset($data['fileSize'])) {
            $this->fileSize = $data['fileSize'];
        }
        if (isset($data['fileSystemInfo'])) {
            $this->fileSystemInfo = is_array($data['fileSystemInfo']) ? new FileSystemInfo($data['fileSystemInfo']) : $data['fileSystemInfo'];
        }
        if (isset($data['mediaSource'])) {
            $this->mediaSource = is_array($data['mediaSource']) ? new MediaSource($data['mediaSource']) : $data['mediaSource'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
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
