<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExclusionGroupAssignmentTarget
 */
class ExclusionGroupAssignmentTarget
{
    /** The group Id that is the target of the assignment. */
    public ?string $groupId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['groupId'])) {
            $this->groupId = $data['groupId'];
        }
    }
}
