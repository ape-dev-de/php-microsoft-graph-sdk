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
     * @var string[]
     */
    private array $order = [];


    /**
     * @return string[]
     */
    public function getOrder(): array
    {
        return $this->order;
    }

    /**
     * @param string[] $order
     */
    public function setOrder(array $order): self
    {
        $this->order = $order;
        return $this;
    }

}
