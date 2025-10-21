<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemSource
 */
class DriveItemSource
{
    public function __construct(
        /** Enumeration value that indicates the source application where the file was created. */
        public ?DriveItemSourceApplication $application = null,
        /** The external identifier for the drive item from the source. */
        public ?string $externalId = null
    ) {}
}
