<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryAddToReviewSetOperation
 */
class SecurityEdiscoveryAddToReviewSetOperation
{
    /**
     * The options to add items to the review set. Possible values are: allVersions, linkedFiles, unknownFutureValue, advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: advancedIndexing, listAttachments, htmlTranscripts, messageConversationExpansion, locationsWithoutHits, allItemsInFolder.
     */
    private ?string $additionalDataOptions;

    /**
     * Specifies the number of most recent versions of cloud attachments to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     */
    private ?string $cloudAttachmentVersion;

    /**
     * Specifies the number of most recent versions of SharePoint documents to collect. Possible values are: latest, recent10, recent100, all, unknownFutureValue.
     */
    private ?string $documentVersion;

    /**
     * The items to include in the review set. Possible values are: searchHits, partiallyIndexed, unknownFutureValue.
     */
    private ?string $itemsToInclude;

    /**
     * Contains the properties for report file metadata, including downloadUrl, fileName, and size.
     */
    private array $reportFileMetadata = [];

    /**
     * eDiscovery review set to which items matching source collection query gets added.
     */
    private ?string $reviewSet;

    /**
     * eDiscovery search that gets added to review set.
     */
    private ?string $search;

    public function getAdditionalDataOptions(): ?string
    {
        return $this->additionalDataOptions;
    }

    public function setAdditionalDataOptions(?string $additionalDataOptions): self
    {
        $this->additionalDataOptions = $additionalDataOptions;
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

    public function getDocumentVersion(): ?string
    {
        return $this->documentVersion;
    }

    public function setDocumentVersion(?string $documentVersion): self
    {
        $this->documentVersion = $documentVersion;
        return $this;
    }

    public function getItemsToInclude(): ?string
    {
        return $this->itemsToInclude;
    }

    public function setItemsToInclude(?string $itemsToInclude): self
    {
        $this->itemsToInclude = $itemsToInclude;
        return $this;
    }

    public function getReportFileMetadata(): array
    {
        return $this->reportFileMetadata;
    }

    public function setReportFileMetadata(array $reportFileMetadata): self
    {
        $this->reportFileMetadata = $reportFileMetadata;
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
