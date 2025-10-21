<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintDocument resources
 *
 * Available select fields:
 * - contentType
 * - displayName
 * - downloadedDateTime
 * - size
 * - uploadedDateTime
 */
class PrintDocumentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintDocument
     */
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DOWNLOADED_DATE_TIME = 'downloadedDateTime';
    public const FIELD_SIZE = 'size';
    public const FIELD_UPLOADED_DATE_TIME = 'uploadedDateTime';

    /**
     * Select specific PrintDocument properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
