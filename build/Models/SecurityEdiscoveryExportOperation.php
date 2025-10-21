<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryExportOperation
 */
class SecurityEdiscoveryExportOperation
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
        /** The description provided for the export. */
        public ?string $description = null,
        /** Contains the properties for an export file metadata, including downloadUrl, fileName, and size. */
        public array $exportFileMetadata = [],
        /** The options provided for the export. For more information, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, tags, unknownFutureValue, splitSource, includeFolderAndPath, friendlyName, condensePaths. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: splitSource, includeFolderAndPath, friendlyName, condensePaths. */
        public ?SecurityExportOptions $exportOptions = null,
        /** The options that specify the structure of the export. For more information, see reviewSet: export. Possible values are: none, directory (deprecated), pst, unknownFutureValue, msg. Use the Prefer: include-unknown-enum-members request header to get the following value from this evolvable enum: msg. The directory member is deprecated. It remains in v1.0 for backward compatibility. Going forward, use either pst or msg. */
        public ?SecurityExportFileStructure $exportStructure = null,
        /** The name provided for the export. */
        public ?string $outputName = null,
        /** Review set from where documents are exported. */
        public ?SecurityEdiscoveryReviewSet $reviewSet = null,
        /** The review set query that is used to filter the documents for export. */
        public ?SecurityEdiscoveryReviewSetQuery $reviewSetQuery = null
    ) {}
}
