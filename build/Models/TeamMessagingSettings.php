<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMessagingSettings
 */
class TeamMessagingSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['allowChannelMentions'])) {
            $this->allowChannelMentions = is_bool($data['allowChannelMentions']) ? $data['allowChannelMentions'] : (bool)$data['allowChannelMentions'];
        }
        if (isset($data['allowOwnerDeleteMessages'])) {
            $this->allowOwnerDeleteMessages = is_bool($data['allowOwnerDeleteMessages']) ? $data['allowOwnerDeleteMessages'] : (bool)$data['allowOwnerDeleteMessages'];
        }
        if (isset($data['allowTeamMentions'])) {
            $this->allowTeamMentions = is_bool($data['allowTeamMentions']) ? $data['allowTeamMentions'] : (bool)$data['allowTeamMentions'];
        }
        if (isset($data['allowUserDeleteMessages'])) {
            $this->allowUserDeleteMessages = is_bool($data['allowUserDeleteMessages']) ? $data['allowUserDeleteMessages'] : (bool)$data['allowUserDeleteMessages'];
        }
        if (isset($data['allowUserEditMessages'])) {
            $this->allowUserEditMessages = is_bool($data['allowUserEditMessages']) ? $data['allowUserEditMessages'] : (bool)$data['allowUserEditMessages'];
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
