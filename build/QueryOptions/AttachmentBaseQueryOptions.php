<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttachmentBase resources
 *
 * Available select fields:
 * - contentType
 * - lastModifiedDateTime
 * - name
 * - size
 */
class AttachmentBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttachmentBase
     */
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific AttachmentBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
