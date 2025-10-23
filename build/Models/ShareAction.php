<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ShareAction
 */
class ShareAction
{
    /** 
     * The identities the item was shared with in this action.
     * @var IdentitySet[]
     */
    public array $recipients = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['recipients'])) {
            $this->recipients = $data['recipients'];
        }
    }
}
