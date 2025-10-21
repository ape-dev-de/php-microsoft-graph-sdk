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
     * @var string[]
     */
    private array $triggerAttributes = [];


    /**
     * @return string[]
     */
    public function getTriggerAttributes(): array
    {
        return $this->triggerAttributes;
    }

    /**
     * @param string[] $triggerAttributes
     */
    public function setTriggerAttributes(array $triggerAttributes): self
    {
        $this->triggerAttributes = $triggerAttributes;
        return $this;
    }

}
