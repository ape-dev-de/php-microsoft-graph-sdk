<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationMemberRoleUpdatedEventMessageDetail
 */
class ConversationMemberRoleUpdatedEventMessageDetail
{
    /** 
     * Roles for the coversation member user.
     * @var string[]
     */
    public array $conversationMemberRoles = [];

    /** 
     * Identity of the conversation member user.
     * @var TeamworkUserIdentity|\stdClass|null
     */
    public mixed $conversationMemberUser = null;

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['conversationMemberRoles'])) {
            $this->conversationMemberRoles = $data['conversationMemberRoles'];
        }
        if (isset($data['conversationMemberUser'])) {
            $this->conversationMemberUser = $data['conversationMemberUser'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
    }
}
