<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleDefinition
 */
class UnifiedRoleDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true. */
    public ?string $description = null;

    /** The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq, in). */
    public ?string $displayName = null;

    /** Flag indicating whether the role definition is part of the default set included in Microsoft Entra or a custom definition. Read-only. Supports $filter (eq, in). */
    public ?bool $isBuiltIn = null;

    /** Flag indicating whether the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true. */
    public ?bool $isEnabled = null;

    /** 
     * List of the scopes or permissions the role definition applies to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This will be deprecated soon. Attach scope to role assignment.
     * @var string[]
     */
    public array $resourceScopes = [];

    /** 
     * List of permissions included in the role. Read-only when isBuiltIn is true. Required.
     * @var UnifiedRolePermission[]
     */
    public array $rolePermissions = [];

    /** Custom template identifier that can be set when isBuiltIn is false but is read-only when isBuiltIn is true. This identifier is typically used if one needs an identifier to be the same across different directories. */
    public ?string $templateId = null;

    /** Indicates version of the role definition. Read-only when isBuiltIn is true. */
    public ?string $version = null;

    /** 
     * Read-only collection of role definitions that the given role definition inherits from. Only Microsoft Entra built-in roles (isBuiltIn is true) support this attribute. Supports $expand.
     * @var UnifiedRoleDefinition[]
     */
    public array $inheritsPermissionsFrom = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isBuiltIn'])) {
            $this->isBuiltIn = $data['isBuiltIn'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['resourceScopes'])) {
            $this->resourceScopes = $data['resourceScopes'];
        }
        if (isset($data['rolePermissions'])) {
            $this->rolePermissions = $data['rolePermissions'];
        }
        if (isset($data['templateId'])) {
            $this->templateId = $data['templateId'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['inheritsPermissionsFrom'])) {
            $this->inheritsPermissionsFrom = $data['inheritsPermissionsFrom'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
