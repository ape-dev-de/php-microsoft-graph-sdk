<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SchemaExtension
 */
class SchemaExtension
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Description for the schema extension. */
    public ?string $description = null;

    /** The appId of the application that is the owner of the schema extension. The owner of the schema definition must be explicitly specified during the Create and Update operations, or it will be implied and auto-assigned by Microsoft Entra ID as follows: In delegated access: The signed-in user must be the owner of the app that calls Microsoft Graph to create the schema extension definition.  If the signed-in user isn't the owner of the calling app, they must explicitly specify the owner property, and assign it the appId of an app that they own. In app-only access:  The owner property isn't required in the request body. Instead, the calling app is assigned ownership of the schema extension. So, for example, if creating a new schema extension definition using Graph Explorer, you must supply the owner property. Once set, this property is read-only and cannot be changed. Supports $filter (eq). */
    public ?string $owner = null;

    /** 
     * The collection of property names and types that make up the schema extension definition.
     * @var ExtensionSchemaProperty[]
     */
    public array $properties = [];

    /** The lifecycle state of the schema extension. Possible states are InDevelopment, Available, and Deprecated. Automatically set to InDevelopment on creation. For more information about the possible state transitions and behaviors, see Schema extensions lifecycle. Supports $filter (eq). */
    public ?string $status = null;

    /** 
     * Set of Microsoft Graph types (that can support extensions) that the schema extension can be applied to. Select from administrativeUnit, contact, device, event, group, message, organization, post, todoTask, todoTaskList, or user.
     * @var string[]
     */
    public array $targetTypes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['owner'])) {
            $this->owner = $data['owner'];
        }
        if (isset($data['properties'])) {
            $this->properties = $data['properties'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['targetTypes'])) {
            $this->targetTypes = $data['targetTypes'];
        }
    }
}
