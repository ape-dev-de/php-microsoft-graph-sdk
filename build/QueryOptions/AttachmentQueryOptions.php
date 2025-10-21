<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Attachment resources
 *
 * Available select fields:
 * - contentType
 * - isInline
 * - lastModifiedDateTime
 * - name
 * - size
 */
class AttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Attachment
     */
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_IS_INLINE = 'isInline';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific Attachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
