<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyUserScope
 */
class PolicyUserScope
{
    /**  */
    public ?UserActivityTypes $activities = null;

    /**  */
    public ?ExecutionMode $executionMode = null;

    /** 
     * The locations (like domains or URLs) to be protected. Required.
     * @var PolicyLocation[]
     */
    public array $locations = [];

    /** 
     * The enforcement actions to take if the policy conditions are met within this scope. Required.
     * @var DlpActionInfo[]
     */
    public array $policyActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['activities'])) {
            $this->activities = $data['activities'];
        }
        if (isset($data['executionMode'])) {
            $this->executionMode = $data['executionMode'];
        }
        if (isset($data['locations'])) {
            $this->locations = $data['locations'];
        }
        if (isset($data['policyActions'])) {
            $this->policyActions = $data['policyActions'];
        }
    }
}
