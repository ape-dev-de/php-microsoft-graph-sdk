<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryExportOperation
 */
class SecurityEdiscoveryExportOperation
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

    /** The description provided for the export. */
    public ?string $description = null;

    /** 
     * Contains the properties for an export file metadata, including downloadUrl, fileName, and size.
     * @var SecurityExportFileMetadata[]
     */
    public array $exportFileMetadata = [];

    /** 
     * The options provided for the export. For more information, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, tags, unknownFutureValue, splitSource, includeFolderAndPath, friendlyName, condensePaths. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: splitSource, includeFolderAndPath, friendlyName, condensePaths.
     * @var SecurityExportOptions|\stdClass|null
     */
    public mixed $exportOptions = null;

    /** 
     * The options that specify the structure of the export. For more information, see reviewSet: export. Possible values are: none, directory (deprecated), pst, unknownFutureValue, msg. Use the Prefer: include-unknown-enum-members request header to get the following value from this evolvable enum: msg. The directory member is deprecated. It remains in v1.0 for backward compatibility. Going forward, use either pst or msg.
     * @var SecurityExportFileStructure|\stdClass|null
     */
    public mixed $exportStructure = null;

    /** The name provided for the export. */
    public ?string $outputName = null;

    /** 
     * Review set from where documents are exported.
     * @var SecurityEdiscoveryReviewSet|\stdClass|null
     */
    public mixed $reviewSet = null;

    /** 
     * The review set query that is used to filter the documents for export.
     * @var SecurityEdiscoveryReviewSetQuery|\stdClass|null
     */
    public mixed $reviewSetQuery = null;


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
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['exportFileMetadata'])) {
            $this->exportFileMetadata = $data['exportFileMetadata'];
        }
        if (isset($data['exportOptions'])) {
            $this->exportOptions = $data['exportOptions'];
        }
        if (isset($data['exportStructure'])) {
            $this->exportStructure = $data['exportStructure'];
        }
        if (isset($data['outputName'])) {
            $this->outputName = $data['outputName'];
        }
        if (isset($data['reviewSet'])) {
            $this->reviewSet = $data['reviewSet'];
        }
        if (isset($data['reviewSetQuery'])) {
            $this->reviewSetQuery = $data['reviewSetQuery'];
        }
    }
}
