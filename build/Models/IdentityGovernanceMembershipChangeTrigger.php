<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceMembershipChangeTrigger
 */
class IdentityGovernanceMembershipChangeTrigger
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?IdentityGovernanceMembershipChangeType $changeType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['changeType'])) {
            $this->changeType = is_string($data['changeType']) ? IdentityGovernanceMembershipChangeType::tryFrom($data['changeType']) : $data['changeType'];
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
