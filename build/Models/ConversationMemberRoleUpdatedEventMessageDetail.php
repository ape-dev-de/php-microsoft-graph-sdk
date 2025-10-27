<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationMemberRoleUpdatedEventMessageDetail
 */
class ConversationMemberRoleUpdatedEventMessageDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['conversationMemberRoles'])) {
            $this->conversationMemberRoles = $data['conversationMemberRoles'];
        }
        if (isset($data['conversationMemberUser'])) {
            $this->conversationMemberUser = is_array($data['conversationMemberUser']) ? new TeamworkUserIdentity($data['conversationMemberUser']) : $data['conversationMemberUser'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = is_array($data['initiator']) ? new IdentitySet($data['initiator']) : $data['initiator'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
