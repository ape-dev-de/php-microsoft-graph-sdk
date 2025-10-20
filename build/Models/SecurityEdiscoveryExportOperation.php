<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryExportOperation
 */
class SecurityEdiscoveryExportOperation
{
    /**
     * The description provided for the export.
     */
    private ?string $description;

    /**
     * Contains the properties for an export file metadata, including downloadUrl, fileName, and size.
     */
    private array $exportFileMetadata = [];

    /**
     * The options provided for the export. For more information, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, tags, unknownFutureValue, splitSource, includeFolderAndPath, friendlyName, condensePaths. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: splitSource, includeFolderAndPath, friendlyName, condensePaths.
     */
    private ?string $exportOptions;

    /**
     * The options that specify the structure of the export. For more information, see reviewSet: export. Possible values are: none, directory (deprecated), pst, unknownFutureValue, msg. Use the Prefer: include-unknown-enum-members request header to get the following value from this evolvable enum: msg. The directory member is deprecated. It remains in v1.0 for backward compatibility. Going forward, use either pst or msg.
     */
    private ?string $exportStructure;

    /**
     * The name provided for the export.
     */
    private ?string $outputName;

    /**
     * Review set from where documents are exported.
     */
    private ?string $reviewSet;

    /**
     * The review set query that is used to filter the documents for export.
     */
    private ?string $reviewSetQuery;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getExportFileMetadata(): array
    {
        return $this->exportFileMetadata;
    }

    public function setExportFileMetadata(array $exportFileMetadata): self
    {
        $this->exportFileMetadata = $exportFileMetadata;
        return $this;
    }

    public function getExportOptions(): ?string
    {
        return $this->exportOptions;
    }

    public function setExportOptions(?string $exportOptions): self
    {
        $this->exportOptions = $exportOptions;
        return $this;
    }

    public function getExportStructure(): ?string
    {
        return $this->exportStructure;
    }

    public function setExportStructure(?string $exportStructure): self
    {
        $this->exportStructure = $exportStructure;
        return $this;
    }

    public function getOutputName(): ?string
    {
        return $this->outputName;
    }

    public function setOutputName(?string $outputName): self
    {
        $this->outputName = $outputName;
        return $this;
    }

    public function getReviewSet(): ?string
    {
        return $this->reviewSet;
    }

    public function setReviewSet(?string $reviewSet): self
    {
        $this->reviewSet = $reviewSet;
        return $this;
    }

    public function getReviewSetQuery(): ?string
    {
        return $this->reviewSetQuery;
    }

    public function setReviewSetQuery(?string $reviewSetQuery): self
    {
        $this->reviewSetQuery = $reviewSetQuery;
        return $this;
    }

}
