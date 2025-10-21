<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerSettings
 */
class FileStorageContainerSettings
{
    /**
     * Indicates whether versioning is enabled for items in the container. Optional. Read-write.
     */
    private ?bool $isItemVersioningEnabled;

    /**
     * Indicates whether Optical Character Recognition (OCR) is enabled for the container. The default value is false. When set to true, OCR extraction is performed for new and updated documents of supported document types, and the extracted fields in the metadata of the document enable end-user search and search-driven solutions. When set to false, existing OCR metadata is not impacted. Optional. Read-write.
     */
    private ?bool $isOcrEnabled;

    /**
     * The maximum major versions allowed for items in the container. Optional. Read-write.
     */
    private ?string $itemMajorVersionLimit;


    public function getIsItemVersioningEnabled(): ?bool
    {
        return $this->isItemVersioningEnabled;
    }

    public function setIsItemVersioningEnabled(?bool $isItemVersioningEnabled): self
    {
        $this->isItemVersioningEnabled = $isItemVersioningEnabled;
        return $this;
    }

    public function getIsOcrEnabled(): ?bool
    {
        return $this->isOcrEnabled;
    }

    public function setIsOcrEnabled(?bool $isOcrEnabled): self
    {
        $this->isOcrEnabled = $isOcrEnabled;
        return $this;
    }

    public function getItemMajorVersionLimit(): ?string
    {
        return $this->itemMajorVersionLimit;
    }

    public function setItemMajorVersionLimit(?string $itemMajorVersionLimit): self
    {
        $this->itemMajorVersionLimit = $itemMajorVersionLimit;
        return $this;
    }

}
