<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GroupMembers
 */
class GroupMembers
{
    /** The name of the group in Microsoft Entra ID. Read-only. */
    public ?string $description = null;

    /** The ID of the group in Microsoft Entra ID. */
    public ?string $groupId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
    }
}
