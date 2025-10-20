<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetVersion resources
 *
 * Available select fields:
 * - comment
 * - createdBy
 * - createdDateTime
 * - items
 * - shouldCaptureMinorVersion
 */
class DocumentSetVersionQueryOptions extends QueryOptions
{
    public const FIELD_COMMENT = 'comment';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ITEMS = 'items';
    public const FIELD_SHOULD_CAPTURE_MINOR_VERSION = 'shouldCaptureMinorVersion';

    /**
     * Select specific DocumentSetVersion properties
     * 
     * @param array<string> $select Use DocumentSetVersionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
