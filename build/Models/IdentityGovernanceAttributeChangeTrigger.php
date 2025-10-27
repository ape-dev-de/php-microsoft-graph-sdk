<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceAttributeChangeTrigger
 */
class IdentityGovernanceAttributeChangeTrigger
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The trigger attribute being changed that triggers the workflowexecutiontrigger of a workflow.)
     * @var IdentityGovernanceTriggerAttribute[]
     */
    public array $triggerAttributes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['triggerAttributes'])) {
            $this->triggerAttributes = $data['triggerAttributes'];
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
