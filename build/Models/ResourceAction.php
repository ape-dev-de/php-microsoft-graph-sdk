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
     * @var string[]
     */
    private array $allowedResourceActions = [];

    /**
     * Set of allowed and not allowed actions for a resource.
     * @var string[]
     */
    private array $notAllowedResourceActions = [];


    /**
     * @return string[]
     */
    public function getAllowedResourceActions(): array
    {
        return $this->allowedResourceActions;
    }

    /**
     * @param string[] $allowedResourceActions
     */
    public function setAllowedResourceActions(array $allowedResourceActions): self
    {
        $this->allowedResourceActions = $allowedResourceActions;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNotAllowedResourceActions(): array
    {
        return $this->notAllowedResourceActions;
    }

    /**
     * @param string[] $notAllowedResourceActions
     */
    public function setNotAllowedResourceActions(array $notAllowedResourceActions): self
    {
        $this->notAllowedResourceActions = $notAllowedResourceActions;
        return $this;
    }

}
