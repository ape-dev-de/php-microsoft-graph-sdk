<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionAttachment resources
 *
 * Available select fields:
 * - attachmentId
 * - content
 * - contentType
 * - contentUrl
 * - name
 */
class AiInteractionAttachmentQueryOptions extends QueryOptions
{
    public const FIELD_ATTACHMENT_ID = 'attachmentId';
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_CONTENT_URL = 'contentUrl';
    public const FIELD_NAME = 'name';

    /**
     * Select specific AiInteractionAttachment properties
     * 
     * @param array<string> $select Use AiInteractionAttachmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
