<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileAttachment resources
 *
 * Available select fields:
 * - contentBytes
 * - contentId
 * - contentLocation
 */
class FileAttachmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileAttachment
     */
    public const FIELD_CONTENT_BYTES = 'contentBytes';
    public const FIELD_CONTENT_ID = 'contentId';
    public const FIELD_CONTENT_LOCATION = 'contentLocation';

    /**
     * Select specific FileAttachment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
