<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceMembershipChangeTrigger
 */
class IdentityGovernanceMembershipChangeTrigger
{
    /**  */
    public ?IdentityGovernanceMembershipChangeType $changeType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['changeType'])) {
            $this->changeType = $data['changeType'];
        }
    }
}
