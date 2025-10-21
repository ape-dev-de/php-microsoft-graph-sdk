<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OneDriveForBusinessRestoreSession
 */
class OneDriveForBusinessRestoreSession
{
    public function __construct(
        /** A collection of restore points and destination details that can be used to restore a OneDrive for work or school drive. */
        public array $driveRestoreArtifacts = [],
        /** @var string[] A collection of user mailboxes and destination details that can be used to restore a OneDrive for work or school drive. */
        public array $driveRestoreArtifactsBulkAdditionRequests = []
    ) {}
}
