<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MentionAction
 */
class MentionAction
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['mentionees'])) {
            $this->mentionees = $data['mentionees'];
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
