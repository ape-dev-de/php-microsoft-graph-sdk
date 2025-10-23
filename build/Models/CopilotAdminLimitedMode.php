<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminLimitedMode
 */
class CopilotAdminLimitedMode
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $groupId = null;

    /**  */
    public ?bool $isEnabledForGroup = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
        if (isset($data['isEnabledForGroup'])) {
            $this->isEnabledForGroup = $data['isEnabledForGroup'];
        }
    }
}
