<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMentionedIdentitySet
 */
class AiInteractionMentionedIdentitySet
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
     * 
     * @var TeamworkConversationIdentity|\stdClass|null
     */
    public mixed $conversation = null;

    /** 
     * 
     * @var TeamworkTagIdentity|\stdClass|null
     */
    public mixed $tag = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['application'])) {
            $this->application = $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = $data['user'];
        }
        if (isset($data['conversation'])) {
            $this->conversation = $data['conversation'];
        }
        if (isset($data['tag'])) {
            $this->tag = $data['tag'];
        }
    }
}
