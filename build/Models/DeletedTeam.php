<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedTeam
 */
class DeletedTeam
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The channels that are either shared with this deleted team or created in this deleted team.
     * @var Channel[]
     */
    public array $channels = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['channels'])) {
            $this->channels = $data['channels'];
        }
    }
}
