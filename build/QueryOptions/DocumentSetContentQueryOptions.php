<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetContent resources
 *
 * Available select fields:
 * - contentType
 * - fileName
 * - folderName
 */
class DocumentSetContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DocumentSetContent
     */
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_FOLDER_NAME = 'folderName';

    /**
     * Select specific DocumentSetContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
