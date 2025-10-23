<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamGuestSettings
 */
class TeamGuestSettings
{
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
        if (isset($data['allowCreateUpdateChannels'])) {
            $this->allowCreateUpdateChannels = $data['allowCreateUpdateChannels'];
        }
        if (isset($data['allowDeleteChannels'])) {
            $this->allowDeleteChannels = $data['allowDeleteChannels'];
        }
    }
}
