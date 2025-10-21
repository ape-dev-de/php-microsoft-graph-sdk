<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityReportFileMetadata resources
 *
 * Available select fields:
 * - downloadUrl
 * - fileName
 * - size
 */
class SecurityReportFileMetadataQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityReportFileMetadata
     */
    public const FIELD_DOWNLOAD_URL = 'downloadUrl';
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific SecurityReportFileMetadata properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
