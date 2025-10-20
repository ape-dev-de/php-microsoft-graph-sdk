<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTriggerAttribute
 */
class IdentityGovernanceTriggerAttribute
{
    /**
     * The name of the trigger attribute that is changed to trigger an attributeChangeTrigger workflow.
     */
    private ?string $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

}
