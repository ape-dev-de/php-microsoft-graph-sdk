<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxRestoreArtifact
 */
class MailboxRestoreArtifact
{
    public function __construct(
        /** The new restored folder identifier for the user. */
        public ?string $restoredFolderId = null,
        /** The new restored folder name. */
        public ?string $restoredFolderName = null,
        /** The number of items that are being restored in the folder. */
        public ?string $restoredItemCount = null
    ) {}
}
