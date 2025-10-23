<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UsageRightsIncluded
 */
class UsageRightsIncluded
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The email of owner label rights. */
    public ?string $ownerEmail = null;

    /** The email of user with label user rights. */
    public ?string $userEmail = null;

    /**  */
    public ?UsageRights $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['ownerEmail'])) {
            $this->ownerEmail = $data['ownerEmail'];
        }
        if (isset($data['userEmail'])) {
            $this->userEmail = $data['userEmail'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
