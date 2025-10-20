<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityExportFileMetadata resources
 *
 * Available select fields:
 * - downloadUrl
 * - fileName
 * - size
 */
class SecurityExportFileMetadataQueryOptions extends QueryOptions
{
    public const FIELD_DOWNLOAD_URL = 'downloadUrl';
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific SecurityExportFileMetadata properties
     * 
     * @param array<string> $select Use SecurityExportFileMetadataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
