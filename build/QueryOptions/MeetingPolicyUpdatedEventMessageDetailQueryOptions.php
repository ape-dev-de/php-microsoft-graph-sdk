<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingPolicyUpdatedEventMessageDetail resources
 *
 * Available select fields:
 * - initiator
 * - meetingChatEnabled
 * - meetingChatId
 */
class MeetingPolicyUpdatedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingPolicyUpdatedEventMessageDetail
     */
    public const FIELD_INITIATOR = 'initiator';
    public const FIELD_MEETING_CHAT_ENABLED = 'meetingChatEnabled';
    public const FIELD_MEETING_CHAT_ID = 'meetingChatId';

    /**
     * Select specific MeetingPolicyUpdatedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
