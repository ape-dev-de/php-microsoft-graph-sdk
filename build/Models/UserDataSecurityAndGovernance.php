<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserDataSecurityAndGovernance
 */
class UserDataSecurityAndGovernance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var SensitivityLabel[]
     */
    public array $sensitivityLabels = [];

    /** 
     * Container for activity logs (content processing and audit) related to this user. ContainsTarget: true.
     * @var ActivitiesContainer|\stdClass|null
     */
    public mixed $activities = null;

    /** 
     * 
     * @var UserProtectionScopeContainer|\stdClass|null
     */
    public mixed $protectionScopes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['sensitivityLabels'])) {
            $this->sensitivityLabels = $data['sensitivityLabels'];
        }
        if (isset($data['activities'])) {
            $this->activities = is_array($data['activities']) ? new ActivitiesContainer($data['activities']) : $data['activities'];
        }
        if (isset($data['protectionScopes'])) {
            $this->protectionScopes = is_array($data['protectionScopes']) ? new UserProtectionScopeContainer($data['protectionScopes']) : $data['protectionScopes'];
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
