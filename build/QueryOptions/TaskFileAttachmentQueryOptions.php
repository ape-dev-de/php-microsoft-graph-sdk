<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TaskFileAttachment resources
 *
 * Available select fields:
 * - contentBytes
 */
class TaskFileAttachmentQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_BYTES = 'contentBytes';

    /**
     * Select specific TaskFileAttachment properties
     * 
     * @param array<string> $select Use TaskFileAttachmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
