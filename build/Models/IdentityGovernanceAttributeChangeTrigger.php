<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceAttributeChangeTrigger
 */
class IdentityGovernanceAttributeChangeTrigger
{
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
        if (isset($data['triggerAttributes'])) {
            $this->triggerAttributes = $data['triggerAttributes'];
        }
    }
}
