<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerSettings
 */
class FileStorageContainerSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether versioning is enabled for items in the container. Optional. Read-write. */
    public ?bool $isItemVersioningEnabled = null;

    /** Indicates whether Optical Character Recognition (OCR) is enabled for the container. The default value is false. When set to true, OCR extraction is performed for new and updated documents of supported document types, and the extracted fields in the metadata of the document enable end-user search and search-driven solutions. When set to false, existing OCR metadata is not impacted. Optional. Read-write. */
    public ?bool $isOcrEnabled = null;

    /** The maximum major versions allowed for items in the container. Optional. Read-write. */
    public ?float $itemMajorVersionLimit = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isItemVersioningEnabled'])) {
            $this->isItemVersioningEnabled = $data['isItemVersioningEnabled'];
        }
        if (isset($data['isOcrEnabled'])) {
            $this->isOcrEnabled = $data['isOcrEnabled'];
        }
        if (isset($data['itemMajorVersionLimit'])) {
            $this->itemMajorVersionLimit = $data['itemMajorVersionLimit'];
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
