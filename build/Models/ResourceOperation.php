<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceOperation
 */
class ResourceOperation
{
    /**
     * Type of action this operation is going to perform. The actionName should be concise and limited to as few words as possible.
     */
    private ?string $actionName;

    /**
     * Description of the resource operation. The description is used in mouse-over text for the operation when shown in the Azure Portal.
     */
    private ?string $description;

    /**
     * Describes the resourceOperation resource (entity) of the Microsoft Graph API (REST), which supports Intune workflows related to role-based access control (RBAC).
     */
    private ?string $resourceName;


    public function getActionName(): ?string
    {
        return $this->actionName;
    }

    public function setActionName(?string $actionName): self
    {
        $this->actionName = $actionName;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getResourceName(): ?string
    {
        return $this->resourceName;
    }

    public function setResourceName(?string $resourceName): self
    {
        $this->resourceName = $resourceName;
        return $this;
    }

}
