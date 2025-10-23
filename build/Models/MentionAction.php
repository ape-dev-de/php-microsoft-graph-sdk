<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MentionAction
 */
class MentionAction
{
    /** 
     * The identities of the users mentioned in this action.
     * @var IdentitySet[]
     */
    public array $mentionees = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['mentionees'])) {
            $this->mentionees = $data['mentionees'];
        }
    }
}
