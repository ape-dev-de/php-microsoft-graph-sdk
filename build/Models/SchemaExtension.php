<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SchemaExtension
 */
class SchemaExtension
{
    /**
     * Description for the schema extension.
     */
    private ?string $description;

    /**
     * The appId of the application that is the owner of the schema extension. The owner of the schema definition must be explicitly specified during the Create and Update operations, or it will be implied and auto-assigned by Microsoft Entra ID as follows: In delegated access: The signed-in user must be the owner of the app that calls Microsoft Graph to create the schema extension definition.  If the signed-in user isn''t the owner of the calling app, they must explicitly specify the owner property, and assign it the appId of an app that they own. In app-only access:  The owner property isn''t required in the request body. Instead, the calling app is assigned ownership of the schema extension. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq).
     */
    private array $owner = [];

    /**
     * The collection of property names and types that make up the schema extension definition.
     */
    private ?string $items;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getOwner(): array
    {
        return $this->owner;
    }

    public function setOwner(array $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getItems(): ?string
    {
        return $this->items;
    }

    public function setItems(?string $items): self
    {
        $this->items = $items;
        return $this;
    }

}
