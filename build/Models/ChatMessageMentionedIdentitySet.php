<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMentionedIdentitySet
 */
class ChatMessageMentionedIdentitySet
{
    /** 
     * Optional. The application associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $application = null;

    /** 
     * Optional. The device associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $device = null;

    /** 
     * Optional. The user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $user = null;

    /** 
     * If present, represents a conversation (for example, team, channel, or chat) @mentioned in a message.
     * @var TeamworkConversationIdentity|\stdClass|null
     */
    public mixed $conversation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new Identity($data['application']) : $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = is_array($data['device']) ? new Identity($data['device']) : $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = is_array($data['user']) ? new Identity($data['user']) : $data['user'];
        }
        if (isset($data['conversation'])) {
            $this->conversation = is_array($data['conversation']) ? new TeamworkConversationIdentity($data['conversation']) : $data['conversation'];
        }
    }
}
