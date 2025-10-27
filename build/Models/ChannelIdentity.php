<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelIdentity
 */
class ChannelIdentity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['channelId'])) {
            $this->channelId = $data['channelId'];
        }
        if (isset($data['teamId'])) {
            $this->teamId = $data['teamId'];
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
