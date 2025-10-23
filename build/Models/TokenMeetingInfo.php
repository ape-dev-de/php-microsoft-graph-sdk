<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TokenMeetingInfo
 */
class TokenMeetingInfo
{
    /** The token used to join the call. */
    public ?string $token = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['token'])) {
            $this->token = $data['token'];
        }
    }
}
