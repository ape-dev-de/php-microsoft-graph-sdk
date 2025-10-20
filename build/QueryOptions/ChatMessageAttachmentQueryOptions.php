<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageAttachment resources
 *
 * Available select fields:
 * - content
 * - contentType
 * - contentUrl
 * - id
 * - name
 * - teamsAppId
 * - thumbnailUrl
 */
class ChatMessageAttachmentQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_CONTENT_URL = 'contentUrl';
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_TEAMS_APP_ID = 'teamsAppId';
    public const FIELD_THUMBNAIL_URL = 'thumbnailUrl';

    /**
     * Select specific ChatMessageAttachment properties
     * 
     * @param array<string> $select Use ChatMessageAttachmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
