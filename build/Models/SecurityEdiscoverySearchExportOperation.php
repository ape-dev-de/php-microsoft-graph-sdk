<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearchExportOperation
 */
class SecurityEdiscoverySearchExportOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult. */
        public ?SecurityCaseAction $action = null,
        /** The date and time the operation was completed. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The user that created the operation. */
        public ?IdentitySet $createdBy = null,
        /** The date and time the operation was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The progress of the operation. */
        public ?float $percentProgress = null,
        /** Contains success and failure-specific result information. */
        public ?ResultInfo $resultInfo = null,
        /** The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed. */
        public ?SecurityCaseOperationStatus $status = null,
        /** The additional items to include in the export. The possible values are: none, teamsAndYammerConversations, cloudAttachments, allDocumentVersions, subfolderContents, listAttachments, unknownFutureValue, htmlTranscripts, advancedIndexing, allItemsInFolder, includeFolderAndPath, condensePaths, friendlyName, splitSource, includeReport. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: htmlTranscripts, advancedIndexing, allItemsInFolder, includeFolderAndPath, condensePaths, friendlyName, splitSource, includeReport. */
        public ?SecurityAdditionalOptions $additionalOptions = null,
        /** The versions of cloud attachments to include in messages. Possible values are: latest, recent10, recent100, all, unknownFutureValue. */
        public ?SecurityCloudAttachmentVersion $cloudAttachmentVersion = null,
        /** The description of the export by the user. */
        public ?string $description = null,
        /** The name of export provided by the user. */
        public ?string $displayName = null,
        /** The versions of files in SharePoint to include. Possible values are: latest, recent10, recent100, all, unknownFutureValue. */
        public ?SecurityDocumentVersion $documentVersion = null,
        /** Items to be included in the export. The possible values are: searchHits, partiallyIndexed, unknownFutureValue. */
        public ?SecurityExportCriteria $exportCriteria = null,
        /** Contains the properties for an export file metadata, including downloadUrl, fileName, and size. */
        public array $exportFileMetadata = [],
        /** Format of the emails of the export. The possible values are: pst, msg, eml (deprecated), unknownFutureValue. The eml member is deprecated. It remains in v1.0 for backward compatibility. Going forward, use either pst or msg. */
        public ?SecurityExportFormat $exportFormat = null,
        /** Location scope for partially indexed items. You can choose to include partially indexed items only in responsive locations with search hits or in all targeted locations. The possible values are: responsiveLocations, nonresponsiveLocations, unknownFutureValue. */
        public ?SecurityExportLocation $exportLocation = null,
        /** Indicates whether to export single items. */
        public ?bool $exportSingleItems = null,
        /** The eDiscovery searches under each case. */
        public ?SecurityEdiscoverySearch $search = null
    ) {}
}
