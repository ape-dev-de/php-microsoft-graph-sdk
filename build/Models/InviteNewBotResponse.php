<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InviteNewBotResponse
 */
class InviteNewBotResponse
{
    /** URI to receive new incoming call notification. */
    public ?string $inviteUri = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['inviteUri'])) {
            $this->inviteUri = $data['inviteUri'];
        }
    }
}
