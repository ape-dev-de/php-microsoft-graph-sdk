<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncementAttachment resources
 *
 * Available select fields:
 * - content
 * - contentType
 * - lastModifiedDateTime
 * - name
 * - size
 */
class ServiceAnnouncementAttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceAnnouncementAttachment
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific ServiceAnnouncementAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
