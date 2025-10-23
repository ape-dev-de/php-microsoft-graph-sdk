<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelIdentity
 */
class ChannelIdentity
{
    /** The identity of the channel in which the message was posted. */
    public ?string $channelId = null;

    /** The identity of the team in which the message was posted. */
    public ?string $teamId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['channelId'])) {
            $this->channelId = $data['channelId'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
        }
    }
}
