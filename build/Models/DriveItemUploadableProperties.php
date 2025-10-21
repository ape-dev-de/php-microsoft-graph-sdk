<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemUploadableProperties
 */
class DriveItemUploadableProperties
{
    public function __construct(
        /** Provides a user-visible description of the item. Read-write. Only on OneDrive Personal. */
        public ?string $description = null,
        /** Information about the drive item source. Read-write. Only on OneDrive for Business and SharePoint. */
        public ?string $driveItemSource = null,
        /** Provides an expected file size to perform a quota check before uploading. Only on OneDrive Personal. */
        public ?float $fileSize = null,
        /** File system information on client. Read-write. */
        public ?string $fileSystemInfo = null,
        /** Media source information. Read-write. Only on OneDrive for Business and SharePoint. */
        public ?string $mediaSource = null,
        /** The name of the item (filename and extension). Read-write. */
        public ?string $name = null
    ) {}
}
