<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMentionedIdentitySet
 */
class AiInteractionMentionedIdentitySet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Optional. The application associated with this action.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $application = null;

    /** 
     * Optional. The device associated with this action.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $device = null;

    /** 
     * Optional. The user associated with this action.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $user = null;

    /** 
     * 
     * @var TeamworkConversationIdentity|\stdClass|null
     */
    public TeamworkConversationIdentity|\stdClass|null $conversation = null;

    /** 
     * 
     * @var TeamworkTagIdentity|\stdClass|null
     */
    public TeamworkTagIdentity|\stdClass|null $tag = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
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
        if (isset($data['tag'])) {
            $this->tag = is_array($data['tag']) ? new TeamworkTagIdentity($data['tag']) : $data['tag'];
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
