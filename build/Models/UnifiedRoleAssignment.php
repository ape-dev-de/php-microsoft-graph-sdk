<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignment
 */
class UnifiedRoleAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identifier of the app specific scope when the assignment scope is app specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by a resource application only. For the entitlement management provider, use this property to specify a catalog. For example, /AccessPackageCatalog/beedadfe-01d5-4025-910b-84abb9369997. Supports $filter (eq, in). For example, /roleManagement/entitlementManagement/roleAssignments?$filter=appScopeId eq '/AccessPackageCatalog/{catalog id}'. */
        public ?string $appScopeId = null,
        /**  */
        public ?string $condition = null,
        /** Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications, unlike app scopes that are defined and understood by a resource application only. Supports $filter (eq, in). */
        public ?string $directoryScopeId = null,
        /** Identifier of the principal to which the assignment is granted. Supported principals are users, role-assignable groups, and service principals. Supports $filter (eq, in). */
        public ?string $principalId = null,
        /** Identifier of the unifiedRoleDefinition the assignment is for. Read-only. Supports $filter (eq, in). */
        public ?string $roleDefinitionId = null,
        /** Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. Supports $expand for the entitlement provider only. */
        public ?AppScope $appScope = null,
        /** The directory object that is the scope of the assignment. Read-only. Supports $expand for the directory provider. */
        public ?DirectoryObject $directoryScope = null,
        /** Referencing the assigned principal. Read-only. Supports $expand except for the Exchange provider. */
        public ?DirectoryObject $principal = null,
        /** The roleDefinition the assignment is for. Supports $expand. */
        public ?UnifiedRoleDefinition $roleDefinition = null
    ) {}
}
