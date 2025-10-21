<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifact
 */
class SiteRestoreArtifact
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The time when restoration of restore artifact is completed. */
        public ?\DateTimeInterface $completionDateTime = null,
        /** Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue. */
        public ?DestinationType $destinationType = null,
        /** Contains error details if the restore session fails or completes with an error. */
        public ?PublicError $error = null,
        /** The time when restoration of restore artifact is started. */
        public ?\DateTimeInterface $startDateTime = null,
        /** The individual restoration status of the restore artifact. The possible values are: added, scheduling, scheduled, inProgress, succeeded, failed, unknownFutureValue. */
        public ?ArtifactRestoreStatus $status = null,
        /** Represents the date and time when an artifact is protected by a protectionPolicy and can be restored. */
        public ?RestorePoint $restorePoint = null,
        /** The new site identifier if the value of the destinationType property is new, and the existing site ID if the value is inPlace. */
        public ?string $restoredSiteId = null,
        /** The name of the restored site. */
        public ?string $restoredSiteName = null,
        /** The web URL of the restored site. */
        public ?string $restoredSiteWebUrl = null
    ) {}
}
