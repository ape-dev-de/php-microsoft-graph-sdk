<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamGuestSettings
 */
class TeamGuestSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If set to true, guests can add and update channels. */
    public ?bool $allowCreateUpdateChannels = null;

    /** If set to true, guests can delete channels. */
    public ?bool $allowDeleteChannels = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowCreateUpdateChannels'])) {
            $this->allowCreateUpdateChannels = is_bool($data['allowCreateUpdateChannels']) ? $data['allowCreateUpdateChannels'] : (bool)$data['allowCreateUpdateChannels'];
        }
        if (isset($data['allowDeleteChannels'])) {
            $this->allowDeleteChannels = is_bool($data['allowDeleteChannels']) ? $data['allowDeleteChannels'] : (bool)$data['allowDeleteChannels'];
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
