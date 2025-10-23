<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatRestrictions
 */
class ChatRestrictions
{
    /** Indicates whether only text is allowed in the meeting chat. Optional. */
    public ?bool $allowTextOnly = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowTextOnly'])) {
            $this->allowTextOnly = $data['allowTextOnly'];
        }
    }
}
