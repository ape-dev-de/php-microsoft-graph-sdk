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
     */
    private ?string $triggerAttributes;

    public function getTriggerAttributes(): ?string
    {
        return $this->triggerAttributes;
    }

    public function setTriggerAttributes(?string $triggerAttributes): self
    {
        $this->triggerAttributes = $triggerAttributes;
        return $this;
    }

}
