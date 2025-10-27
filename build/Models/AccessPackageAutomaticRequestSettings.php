<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAutomaticRequestSettings
 */
class AccessPackageAutomaticRequestSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The duration for which access must be retained before the target's access is revoked once they leave the allowed target scope. */
    public ?string $gracePeriodBeforeAccessRemoval = null;

    /** Indicates whether automatic assignment must be removed for targets who move out of the allowed target scope. */
    public ?bool $removeAccessWhenTargetLeavesAllowedTargets = null;

    /** If set to true, automatic assignments will be created for targets in the allowed target scope. */
    public ?bool $requestAccessForAllowedTargets = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['gracePeriodBeforeAccessRemoval'])) {
            $this->gracePeriodBeforeAccessRemoval = $data['gracePeriodBeforeAccessRemoval'];
        }
        if (isset($data['removeAccessWhenTargetLeavesAllowedTargets'])) {
            $this->removeAccessWhenTargetLeavesAllowedTargets = is_bool($data['removeAccessWhenTargetLeavesAllowedTargets']) ? $data['removeAccessWhenTargetLeavesAllowedTargets'] : (bool)$data['removeAccessWhenTargetLeavesAllowedTargets'];
        }
        if (isset($data['requestAccessForAllowedTargets'])) {
            $this->requestAccessForAllowedTargets = is_bool($data['requestAccessForAllowedTargets']) ? $data['requestAccessForAllowedTargets'] : (bool)$data['requestAccessForAllowedTargets'];
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
