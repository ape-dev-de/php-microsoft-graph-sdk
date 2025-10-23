<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkTagMember
 */
class TeamworkTagMember
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The member's display name. */
    public ?string $displayName = null;

    /** The ID of the tenant that the tag member is a part of. */
    public ?string $tenantId = null;

    /** The user ID of the member. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
