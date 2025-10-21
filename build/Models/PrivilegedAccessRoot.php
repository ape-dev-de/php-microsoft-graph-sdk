<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivilegedAccessRoot
 */
class PrivilegedAccessRoot
{
    /**
     * A group that's governed through Privileged Identity Management (PIM).
     */
    private ?string $group;


    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }

}
