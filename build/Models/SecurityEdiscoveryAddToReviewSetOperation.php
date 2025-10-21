<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryAddToReviewSetOperation
 */
class SecurityEdiscoveryAddToReviewSetOperation
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
        /** The options to add items to the review set. Possible values are: allVersions, linkedFiles, unknownFutureValue, advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. */
        public ?SecurityAdditionalDataOptions $additionalDataOptions = null,
        /** Specifies the number of most recent versions of cloud attachments to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue. */
        public ?SecurityCloudAttachmentVersion $cloudAttachmentVersion = null,
        /** Specifies the number of most recent versions of SharePoint documents to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue. */
        public ?SecurityDocumentVersion $documentVersion = null,
        /** The items to include in the review set. Possible values are: searchHits, partiallyIndexed, unknownFutureValue. */
        public ?SecurityItemsToInclude $itemsToInclude = null,
        /** Contains the properties for report file metadata, including downloadUrl, fileName, and size. */
        public array $reportFileMetadata = [],
        /** eDiscovery review set to which items matching source collection query gets added. */
        public ?SecurityEdiscoveryReviewSet $reviewSet = null,
        /** eDiscovery search that gets added to review set. */
        public ?SecurityEdiscoverySearch $search = null
    ) {}
}
