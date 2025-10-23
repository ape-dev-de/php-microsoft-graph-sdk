<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelAddedEventMessageDetail
 */
class ChannelAddedEventMessageDetail
{
    /** Display name of the channel. */
    public ?string $channelDisplayName = null;

    /** Unique identifier of the channel. */
    public ?string $channelId = null;

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
        if (isset($data['channelDisplayName'])) {
            $this->channelDisplayName = $data['channelDisplayName'];
        }
        if (isset($data['channelId'])) {
            $this->channelId = $data['channelId'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
    }
}
