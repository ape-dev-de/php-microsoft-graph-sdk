<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteRestoreArtifactsBulkAdditionRequest
 */
class SiteRestoreArtifactsBulkAdditionRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity of the person who created the bulk request. */
        public ?IdentitySet $createdBy = null,
        /** The time when the bulk request was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Indicates the restoration destination. The possible values are: new, inPlace, unknownFutureValue. */
        public ?DestinationType $destinationType = null,
        /** Name of the addition request. */
        public ?string $displayName = null,
        /** Error details are populated for resource resolution failures. */
        public ?PublicError $error = null,
        /** Identity of the person who last modified this entity. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Timestamp when this entity was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The start and end date and time of the protection period. */
        public ?TimePeriod $protectionTimePeriod = null,
        /** @var string[] Indicates which protection units to restore. This property isn't implemented yet. Future value; don't use. */
        public array $protectionUnitIds = [],
        /** Indicates which restore point to return. The possible values are: oldest, latest, unknownFutureValue. */
        public ?RestorePointPreference $restorePointPreference = null,
        /**  */
        public ?RestoreArtifactsBulkRequestStatus $status = null,
        /** The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue. */
        public ?RestorePointTags $tags = null,
        /** @var string[] The list of SharePoint site IDs that are added to the corresponding SharePoint restore session in a bulk operation. */
        public array $siteIds = [],
        /** @var string[] The list of SharePoint site URLs that are added to the corresponding SharePoint restore session in a bulk operation. */
        public array $siteWebUrls = []
    ) {}
}
