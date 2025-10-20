<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentInfo resources
 *
 * Available select fields:
 * - attachmentType
 * - contentType
 * - name
 * - size
 */
class AttachmentInfoQueryOptions extends QueryOptions
{
    public const FIELD_ATTACHMENT_TYPE = 'attachmentType';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific AttachmentInfo properties
     * 
     * @param array<string> $select Use AttachmentInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
