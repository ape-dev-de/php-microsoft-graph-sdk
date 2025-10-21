<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedEBookAssignment
 */
class ManagedEBookAssignment
{
    /**
     */
    private ?string $installIntent;

    /**
     * Contains properties used to assign a eBook to a group.
     */
    private ?string $target;


    public function getInstallIntent(): ?string
    {
        return $this->installIntent;
    }

    public function setInstallIntent(?string $installIntent): self
    {
        $this->installIntent = $installIntent;
        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

}
