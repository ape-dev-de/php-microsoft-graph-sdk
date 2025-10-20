<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignmentOrder
 */
class AssignmentOrder
{
    /**
     * A list of identityUserFlowAttribute object identifiers that determine the order in which attributes should be collected within a user flow.
     */
    private ?string $order;

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;
        return $this;
    }

}
