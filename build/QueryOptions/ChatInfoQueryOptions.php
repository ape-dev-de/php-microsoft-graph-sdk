<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatInfo resources
 *
 * Available select fields:
 * - messageId
 * - replyChainMessageId
 * - threadId
 */
class ChatInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatInfo
     */
    public const FIELD_MESSAGE_ID = 'messageId';
    public const FIELD_REPLY_CHAIN_MESSAGE_ID = 'replyChainMessageId';
    public const FIELD_THREAD_ID = 'threadId';

    /**
     * Select specific ChatInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
