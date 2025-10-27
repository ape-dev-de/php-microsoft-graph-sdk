<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InviteNewBotResponse
 */
class InviteNewBotResponse
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** URI to receive new incoming call notification. */
    public ?string $inviteUri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['inviteUri'])) {
            $this->inviteUri = $data['inviteUri'];
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
