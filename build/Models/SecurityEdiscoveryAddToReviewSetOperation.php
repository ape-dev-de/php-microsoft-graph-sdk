<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryAddToReviewSetOperation
 */
class SecurityEdiscoveryAddToReviewSetOperation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult.
     * @var SecurityCaseAction|\stdClass|null
     */
    public mixed $action = null;

    /** The date and time the operation was completed. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The user that created the operation.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The date and time the operation was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The progress of the operation. */
    public ?float $percentProgress = null;

    /** 
     * Contains success and failure-specific result information.
     * @var ResultInfo|\stdClass|null
     */
    public mixed $resultInfo = null;

    /** 
     * The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     * @var SecurityCaseOperationStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * The options to add items to the review set. Possible values are: allVersions, linkedFiles, unknownFutureValue, advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder.
     * @var SecurityAdditionalDataOptions|\stdClass|null
     */
    public mixed $additionalDataOptions = null;

    /** 
     * Specifies the number of most recent versions of cloud attachments to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     * @var SecurityCloudAttachmentVersion|\stdClass|null
     */
    public mixed $cloudAttachmentVersion = null;

    /** 
     * Specifies the number of most recent versions of SharePoint documents to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     * @var SecurityDocumentVersion|\stdClass|null
     */
    public mixed $documentVersion = null;

    /** 
     * The items to include in the review set. Possible values are: searchHits, partiallyIndexed, unknownFutureValue.
     * @var SecurityItemsToInclude|\stdClass|null
     */
    public mixed $itemsToInclude = null;

    /** 
     * Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     * @var SecurityReportFileMetadata[]
     */
    public array $reportFileMetadata = [];

    /** 
     * eDiscovery review set to which items matching source collection query gets added.
     * @var SecurityEdiscoveryReviewSet|\stdClass|null
     */
    public mixed $reviewSet = null;

    /** 
     * eDiscovery search that gets added to review set.
     * @var SecurityEdiscoverySearch|\stdClass|null
     */
    public mixed $search = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['percentProgress'])) {
            $this->percentProgress = $data['percentProgress'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['additionalDataOptions'])) {
            $this->additionalDataOptions = $data['additionalDataOptions'];
        }
        if (isset($data['cloudAttachmentVersion'])) {
            $this->cloudAttachmentVersion = $data['cloudAttachmentVersion'];
        }
        if (isset($data['documentVersion'])) {
            $this->documentVersion = $data['documentVersion'];
        }
        if (isset($data['itemsToInclude'])) {
            $this->itemsToInclude = $data['itemsToInclude'];
        }
        if (isset($data['reportFileMetadata'])) {
            $this->reportFileMetadata = $data['reportFileMetadata'];
        }
        if (isset($data['reviewSet'])) {
            $this->reviewSet = $data['reviewSet'];
        }
        if (isset($data['search'])) {
            $this->search = $data['search'];
        }
    }
}
