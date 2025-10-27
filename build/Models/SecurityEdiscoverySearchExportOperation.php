<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearchExportOperation
 */
class SecurityEdiscoverySearchExportOperation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
     * The additional items to include in the export. The possible values are: none, teamsAndYammerConversations, cloudAttachments, allDocumentVersions, subfolderContents, listAttachments, unknownFutureValue, htmlTranscripts, advancedIndexing, allItemsInFolder, includeFolderAndPath, condensePaths, friendlyName, splitSource, includeReport. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: htmlTranscripts, advancedIndexing, allItemsInFolder, includeFolderAndPath, condensePaths, friendlyName, splitSource, includeReport.
     * @var SecurityAdditionalOptions|\stdClass|null
     */
    public mixed $additionalOptions = null;

    /** 
     * The versions of cloud attachments to include in messages. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     * @var SecurityCloudAttachmentVersion|\stdClass|null
     */
    public mixed $cloudAttachmentVersion = null;

    /** The description of the export by the user. */
    public ?string $description = null;

    /** The name of export provided by the user. */
    public ?string $displayName = null;

    /** 
     * The versions of files in SharePoint to include. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     * @var SecurityDocumentVersion|\stdClass|null
     */
    public mixed $documentVersion = null;

    /** 
     * Items to be included in the export. The possible values are: searchHits, partiallyIndexed, unknownFutureValue.
     * @var SecurityExportCriteria|\stdClass|null
     */
    public mixed $exportCriteria = null;

    /** 
     * Contains the properties for an export file metadata, including downloadUrl, fileName, and size.
     * @var SecurityExportFileMetadata[]
     */
    public array $exportFileMetadata = [];

    /** 
     * Format of the emails of the export. The possible values are: pst, msg, eml (deprecated), unknownFutureValue. The eml member is deprecated. It remains in v1.0 for backward compatibility. Going forward, use either pst or msg.
     * @var SecurityExportFormat|\stdClass|null
     */
    public mixed $exportFormat = null;

    /** 
     * Location scope for partially indexed items. You can choose to include partially indexed items only in responsive locations with search hits or in all targeted locations. The possible values are: responsiveLocations, nonresponsiveLocations, unknownFutureValue.
     * @var SecurityExportLocation|\stdClass|null
     */
    public mixed $exportLocation = null;

    /** Indicates whether to export single items. */
    public ?bool $exportSingleItems = null;

    /** 
     * The eDiscovery searches under each case.
     * @var SecurityEdiscoverySearch|\stdClass|null
     */
    public mixed $search = null;


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
            $this->action = is_array($data['action']) ? new SecurityCaseAction($data['action']) : $data['action'];
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
            $this->percentProgress = $data['percentProgress'];
        }
        if (isset($data['resultInfo'])) {
            $this->resultInfo = is_array($data['resultInfo']) ? new ResultInfo($data['resultInfo']) : $data['resultInfo'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SecurityCaseOperationStatus($data['status']) : $data['status'];
        }
        if (isset($data['additionalOptions'])) {
            $this->additionalOptions = is_array($data['additionalOptions']) ? new SecurityAdditionalOptions($data['additionalOptions']) : $data['additionalOptions'];
        }
        if (isset($data['cloudAttachmentVersion'])) {
            $this->cloudAttachmentVersion = is_array($data['cloudAttachmentVersion']) ? new SecurityCloudAttachmentVersion($data['cloudAttachmentVersion']) : $data['cloudAttachmentVersion'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['documentVersion'])) {
            $this->documentVersion = is_array($data['documentVersion']) ? new SecurityDocumentVersion($data['documentVersion']) : $data['documentVersion'];
        }
        if (isset($data['exportCriteria'])) {
            $this->exportCriteria = is_array($data['exportCriteria']) ? new SecurityExportCriteria($data['exportCriteria']) : $data['exportCriteria'];
        }
        if (isset($data['exportFileMetadata'])) {
            $this->exportFileMetadata = $data['exportFileMetadata'];
        }
        if (isset($data['exportFormat'])) {
            $this->exportFormat = is_array($data['exportFormat']) ? new SecurityExportFormat($data['exportFormat']) : $data['exportFormat'];
        }
        if (isset($data['exportLocation'])) {
            $this->exportLocation = is_array($data['exportLocation']) ? new SecurityExportLocation($data['exportLocation']) : $data['exportLocation'];
        }
        if (isset($data['exportSingleItems'])) {
            $this->exportSingleItems = $data['exportSingleItems'];
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
