<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoverySearchExportOperation
 */
class SecurityEdiscoverySearchExportOperation
{
    /**
     * The additional items to include in the export. The possible values are: none, teamsAndYammerConversations, cloudAttachments, allDocumentVersions, subfolderContents, listAttachments, unknownFutureValue, htmlTranscripts, advancedIndexing, allItemsInFolder, includeFolderAndPath, condensePaths, friendlyName, splitSource, includeReport. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: htmlTranscripts, advancedIndexing, allItemsInFolder, includeFolderAndPath, condensePaths, friendlyName, splitSource, includeReport.
     */
    private ?string $additionalOptions;

    /**
     * The versions of cloud attachments to include in messages. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     */
    private ?string $cloudAttachmentVersion;

    /**
     * The description of the export by the user.
     */
    private ?string $description;

    /**
     * The name of export provided by the user.
     */
    private ?string $displayName;

    /**
     * The versions of files in SharePoint to include. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     */
    private ?string $documentVersion;

    /**
     * Items to be included in the export. The possible values are: searchHits, partiallyIndexed, unknownFutureValue.
     */
    private ?string $exportCriteria;

    /**
     * Contains the properties for an export file metadata, including downloadUrl, fileName, and size.
     */
    private array $exportFileMetadata = [];

    /**
     * Format of the emails of the export. The possible values are: pst, msg, eml (deprecated), unknownFutureValue. The eml member is deprecated. It remains in v1.0 for backward compatibility. Going forward, use either pst or msg.
     */
    private ?string $exportFormat;

    /**
     * Location scope for partially indexed items. You can choose to include partially indexed items only in responsive locations with search hits or in all targeted locations. The possible values are: responsiveLocations, nonresponsiveLocations, unknownFutureValue.
     */
    private ?string $exportLocation;

    /**
     * Indicates whether to export single items.
     */
    private ?bool $exportSingleItems;

    /**
     * The eDiscovery searches under each case.
     */
    private ?string $search;

    public function getAdditionalOptions(): ?string
    {
        return $this->additionalOptions;
    }

    public function setAdditionalOptions(?string $additionalOptions): self
    {
        $this->additionalOptions = $additionalOptions;
        return $this;
    }

    public function getCloudAttachmentVersion(): ?string
    {
        return $this->cloudAttachmentVersion;
    }

    public function setCloudAttachmentVersion(?string $cloudAttachmentVersion): self
    {
        $this->cloudAttachmentVersion = $cloudAttachmentVersion;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDocumentVersion(): ?string
    {
        return $this->documentVersion;
    }

    public function setDocumentVersion(?string $documentVersion): self
    {
        $this->documentVersion = $documentVersion;
        return $this;
    }

    public function getExportCriteria(): ?string
    {
        return $this->exportCriteria;
    }

    public function setExportCriteria(?string $exportCriteria): self
    {
        $this->exportCriteria = $exportCriteria;
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

    public function getExportFormat(): ?string
    {
        return $this->exportFormat;
    }

    public function setExportFormat(?string $exportFormat): self
    {
        $this->exportFormat = $exportFormat;
        return $this;
    }

    public function getExportLocation(): ?string
    {
        return $this->exportLocation;
    }

    public function setExportLocation(?string $exportLocation): self
    {
        $this->exportLocation = $exportLocation;
        return $this;
    }

    public function getExportSingleItems(): ?bool
    {
        return $this->exportSingleItems;
    }

    public function setExportSingleItems(?bool $exportSingleItems): self
    {
        $this->exportSingleItems = $exportSingleItems;
        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }

}
