<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteraction resources
 *
 * Available select fields:
 * - appClass
 * - attachments
 * - body
 * - contexts
 * - conversationType
 * - createdDateTime
 * - etag
 * - from
 * - interactionType
 * - links
 * - locale
 * - mentions
 * - requestId
 * - sessionId
 */
class AiInteractionQueryOptions extends QueryOptions
{
    public const FIELD_APP_CLASS = 'appClass';
    public const FIELD_ATTACHMENTS = 'attachments';
    public const FIELD_BODY = 'body';
    public const FIELD_CONTEXTS = 'contexts';
    public const FIELD_CONVERSATION_TYPE = 'conversationType';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ETAG = 'etag';
    public const FIELD_FROM = 'from';
    public const FIELD_INTERACTION_TYPE = 'interactionType';
    public const FIELD_LINKS = 'links';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_MENTIONS = 'mentions';
    public const FIELD_REQUEST_ID = 'requestId';
    public const FIELD_SESSION_ID = 'sessionId';

    /**
     * Select specific AiInteraction properties
     * 
     * @param array<string> $select Use AiInteractionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
