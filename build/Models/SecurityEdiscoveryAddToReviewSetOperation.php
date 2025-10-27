<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryAddToReviewSetOperation
 */
class SecurityEdiscoveryAddToReviewSetOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult.
     * @var SecurityCaseAction|\stdClass|null
     */
    public SecurityCaseAction|\stdClass|null $action = null;

    /** The date and time the operation was completed. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The user that created the operation.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The date and time the operation was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The progress of the operation. */
    public ?float $percentProgress = null;

    /** 
     * Contains success and failure-specific result information.
     * @var ResultInfo|\stdClass|null
     */
    public ResultInfo|\stdClass|null $resultInfo = null;

    /** 
     * The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     * @var SecurityCaseOperationStatus|\stdClass|null
     */
    public SecurityCaseOperationStatus|\stdClass|null $status = null;

    /** 
     * The options to add items to the review set. Possible values are: allVersions, linkedFiles, unknownFutureValue, advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder.
     * @var SecurityAdditionalDataOptions|\stdClass|null
     */
    public SecurityAdditionalDataOptions|\stdClass|null $additionalDataOptions = null;

    /** 
     * Specifies the number of most recent versions of cloud attachments to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     * @var SecurityCloudAttachmentVersion|\stdClass|null
     */
    public SecurityCloudAttachmentVersion|\stdClass|null $cloudAttachmentVersion = null;

    /** 
     * Specifies the number of most recent versions of SharePoint documents to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     * @var SecurityDocumentVersion|\stdClass|null
     */
    public SecurityDocumentVersion|\stdClass|null $documentVersion = null;

    /** 
     * The items to include in the review set. Possible values are: searchHits, partiallyIndexed, unknownFutureValue.
     * @var SecurityItemsToInclude|\stdClass|null
     */
    public SecurityItemsToInclude|\stdClass|null $itemsToInclude = null;

    /** 
     * Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     * @var SecurityReportFileMetadata[]
     */
    public array $reportFileMetadata = [];

    /** 
     * eDiscovery review set to which items matching source collection query gets added.
     * @var SecurityEdiscoveryReviewSet|\stdClass|null
     */
    public SecurityEdiscoveryReviewSet|\stdClass|null $reviewSet = null;

    /** 
     * eDiscovery search that gets added to review set.
     * @var SecurityEdiscoverySearch|\stdClass|null
     */
    public SecurityEdiscoverySearch|\stdClass|null $search = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['action'])) {
            $this->action = is_string($data['action']) ? SecurityCaseAction::tryFrom($data['action']) : $data['action'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['percentProgress'])) {
            $this->percentProgress = is_numeric($data['percentProgress']) ? (float)$data['percentProgress'] : $data['percentProgress'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = is_array($data['resultInfo']) ? new ResultInfo($data['resultInfo']) : $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? SecurityCaseOperationStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['additionalDataOptions'])) {
            $this->additionalDataOptions = is_string($data['additionalDataOptions']) ? SecurityAdditionalDataOptions::tryFrom($data['additionalDataOptions']) : $data['additionalDataOptions'];
        }
        if (isset($data['cloudAttachmentVersion'])) {
            $this->cloudAttachmentVersion = is_string($data['cloudAttachmentVersion']) ? SecurityCloudAttachmentVersion::tryFrom($data['cloudAttachmentVersion']) : $data['cloudAttachmentVersion'];
        }
        if (isset($data['documentVersion'])) {
            $this->documentVersion = is_string($data['documentVersion']) ? SecurityDocumentVersion::tryFrom($data['documentVersion']) : $data['documentVersion'];
        }
        if (isset($data['itemsToInclude'])) {
            $this->itemsToInclude = is_string($data['itemsToInclude']) ? SecurityItemsToInclude::tryFrom($data['itemsToInclude']) : $data['itemsToInclude'];
        }
        if (isset($data['reportFileMetadata'])) {
            $this->reportFileMetadata = $data['reportFileMetadata'];
        }
        if (isset($data['reviewSet'])) {
            $this->reviewSet = is_array($data['reviewSet']) ? new SecurityEdiscoveryReviewSet($data['reviewSet']) : $data['reviewSet'];
        }
        if (isset($data['search'])) {
            $this->search = is_array($data['search']) ? new SecurityEdiscoverySearch($data['search']) : $data['search'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
