<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerSettings
 */
class FileStorageContainerSettings
{
    public function __construct(
        /** Indicates whether versioning is enabled for items in the container. Optional. Read-write. */
        public ?bool $isItemVersioningEnabled = null,
        /** Indicates whether Optical Character Recognition (OCR) is enabled for the container. The default value is false. When set to true, OCR extraction is performed for new and updated documents of supported document types, and the extracted fields in the metadata of the document enable end-user search and search-driven solutions. When set to false, existing OCR metadata is not impacted. Optional. Read-write. */
        public ?bool $isOcrEnabled = null,
        /** The maximum major versions allowed for items in the container. Optional. Read-write. */
        public ?string $itemMajorVersionLimit = null
    ) {}
}
