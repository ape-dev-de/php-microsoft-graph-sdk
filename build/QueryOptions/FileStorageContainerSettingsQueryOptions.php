<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainerSettings resources
 *
 * Available select fields:
 * - isItemVersioningEnabled
 * - isOcrEnabled
 * - itemMajorVersionLimit
 */
class FileStorageContainerSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_ITEM_VERSIONING_ENABLED = 'isItemVersioningEnabled';
    public const FIELD_IS_OCR_ENABLED = 'isOcrEnabled';
    public const FIELD_ITEM_MAJOR_VERSION_LIMIT = 'itemMajorVersionLimit';

    /**
     * Select specific FileStorageContainerSettings properties
     * 
     * @param array<string> $select Use FileStorageContainerSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
