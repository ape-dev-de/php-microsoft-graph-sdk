<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearchExportOperation
 */
class SecurityEdiscoverySearchExportOperation
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
        if (isset($data['additionalOptions'])) {
            $this->additionalOptions = $data['additionalOptions'];
        }
        if (isset($data['cloudAttachmentVersion'])) {
            $this->cloudAttachmentVersion = $data['cloudAttachmentVersion'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['documentVersion'])) {
            $this->documentVersion = $data['documentVersion'];
        }
        if (isset($data['exportCriteria'])) {
            $this->exportCriteria = $data['exportCriteria'];
        }
        if (isset($data['exportFileMetadata'])) {
            $this->exportFileMetadata = $data['exportFileMetadata'];
        }
        if (isset($data['exportFormat'])) {
            $this->exportFormat = $data['exportFormat'];
        }
        if (isset($data['exportLocation'])) {
            $this->exportLocation = $data['exportLocation'];
        }
        if (isset($data['exportSingleItems'])) {
            $this->exportSingleItems = $data['exportSingleItems'];
        }
        if (isset($data['search'])) {
            $this->search = $data['search'];
        }
    }
}
