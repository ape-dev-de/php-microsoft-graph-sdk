<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMessagingSettings
 */
class TeamMessagingSettings
{
    /** If set to true, @channel mentions are allowed. */
    public ?bool $allowChannelMentions = null;

    /** If set to true, owners can delete any message. */
    public ?bool $allowOwnerDeleteMessages = null;

    /** If set to true, @team mentions are allowed. */
    public ?bool $allowTeamMentions = null;

    /** If set to true, users can delete their messages. */
    public ?bool $allowUserDeleteMessages = null;

    /** If set to true, users can edit their messages. */
    public ?bool $allowUserEditMessages = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowChannelMentions'])) {
            $this->allowChannelMentions = $data['allowChannelMentions'];
        }
        if (isset($data['allowOwnerDeleteMessages'])) {
            $this->allowOwnerDeleteMessages = $data['allowOwnerDeleteMessages'];
        }
        if (isset($data['allowTeamMentions'])) {
            $this->allowTeamMentions = $data['allowTeamMentions'];
        }
        if (isset($data['allowUserDeleteMessages'])) {
            $this->allowUserDeleteMessages = $data['allowUserDeleteMessages'];
        }
        if (isset($data['allowUserEditMessages'])) {
            $this->allowUserEditMessages = $data['allowUserEditMessages'];
        }
    }
}
