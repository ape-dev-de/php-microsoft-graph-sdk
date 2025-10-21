<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GranularMailboxRestoreArtifact
 */
class GranularMailboxRestoreArtifact
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The time when restoration of restore artifact is completed. */
        public ?\DateTimeInterface $completionDateTime = null,
        /** Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue. */
        public ?string $destinationType = null,
        /** Contains error details if the restore session fails or completes with an error. */
        public ?string $error = null,
        /** The time when restoration of restore artifact is started. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue. */
        public ?string $status = null,
        /** Represents the date and time when an artifact is protected by a protectionPolicy and can be restored. */
        public ?string $restorePoint = null,
        /** The new restored folder identifier for the user. */
        public ?string $restoredFolderId = null,
        /** The new restored folder name. */
        public ?string $restoredFolderName = null,
        /** The number of items that are being restored in the folder. */
        public ?float $restoredItemCount = null,
        /** This property will be deprecated soon. Don't use. */
        public ?float $artifactCount = null,
        /** . */
        public ?string $searchResponseId = null
    ) {}
}
