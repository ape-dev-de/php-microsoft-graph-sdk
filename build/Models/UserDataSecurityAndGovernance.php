<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserDataSecurityAndGovernance
 */
class UserDataSecurityAndGovernance
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['sensitivityLabels'])) {
            $this->sensitivityLabels = $data['sensitivityLabels'];
        }
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
        }
        if (isset($data['protectionScopes'])) {
            $this->protectionScopes = $data['protectionScopes'];
        }
    }
}
