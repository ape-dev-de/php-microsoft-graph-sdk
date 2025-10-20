<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceAction
 */
class ResourceAction
{
    /**
     * Allowed Actions
     */
    private ?string $allowedResourceActions;

    /**
     * Set of allowed and not allowed actions for a resource.
     */
    private ?string $notAllowedResourceActions;

    public function getAllowedResourceActions(): ?string
    {
        return $this->allowedResourceActions;
    }

    public function setAllowedResourceActions(?string $allowedResourceActions): self
    {
        $this->allowedResourceActions = $allowedResourceActions;
        return $this;
    }

    public function getNotAllowedResourceActions(): ?string
    {
        return $this->notAllowedResourceActions;
    }

    public function setNotAllowedResourceActions(?string $notAllowedResourceActions): self
    {
        $this->notAllowedResourceActions = $notAllowedResourceActions;
        return $this;
    }

}
