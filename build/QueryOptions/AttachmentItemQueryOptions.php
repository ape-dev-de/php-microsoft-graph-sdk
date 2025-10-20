<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentItem resources
 *
 * Available select fields:
 * - attachmentType
 * - contentId
 * - contentType
 * - isInline
 * - name
 * - size
 */
class AttachmentItemQueryOptions extends QueryOptions
{
    public const FIELD_ATTACHMENT_TYPE = 'attachmentType';
    public const FIELD_CONTENT_ID = 'contentId';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_IS_INLINE = 'isInline';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific AttachmentItem properties
     * 
     * @param array<string> $select Use AttachmentItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
