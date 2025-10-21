<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestorManager
 */
class RequestorManager
{
    /**
     * The hierarchical level of the manager with respect to the requestor. For example, the direct manager of a requestor would have a managerLevel of 1, while the manager of the requestor''s manager would have a managerLevel of 2. Default value for managerLevel is 1. Possible values for this property range from 1 to 2.
     */
    private ?string $managerLevel;


    public function getManagerLevel(): ?string
    {
        return $this->managerLevel;
    }

    public function setManagerLevel(?string $managerLevel): self
    {
        $this->managerLevel = $managerLevel;
        return $this;
    }

}
