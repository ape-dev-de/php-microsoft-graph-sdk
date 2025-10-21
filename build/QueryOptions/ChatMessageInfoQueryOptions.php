<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageInfo resources
 *
 * Available select fields:
 * - body
 * - createdDateTime
 * - eventDetail
 * - from
 * - isDeleted
 * - messageType
 */
class ChatMessageInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageInfo
     */
    public const FIELD_BODY = 'body';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_EVENT_DETAIL = 'eventDetail';
    public const FIELD_FROM = 'from';
    public const FIELD_IS_DELETED = 'isDeleted';
    public const FIELD_MESSAGE_TYPE = 'messageType';

    /**
     * Select specific ChatMessageInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
