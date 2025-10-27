<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTriggerAndScopeBasedConditions
 */
class IdentityGovernanceTriggerAndScopeBasedConditions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Defines who the workflow runs for.
     * @var SubjectSet|\stdClass|null
     */
    public SubjectSet|\stdClass|null $scope = null;

    /** 
     * What triggers a workflow to run.
     * @var IdentityGovernanceWorkflowExecutionTrigger|\stdClass|null
     */
    public IdentityGovernanceWorkflowExecutionTrigger|\stdClass|null $trigger = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new SubjectSet($data['scope']) : $data['scope'];
        }
        if (isset($data['trigger'])) {
            $this->trigger = is_array($data['trigger']) ? new IdentityGovernanceWorkflowExecutionTrigger($data['trigger']) : $data['trigger'];
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
