<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleEligibilitySchedule
 */
class UnifiedRoleEligibilitySchedule
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Identifier of the app-specific scope when the assignment or eligibility is scoped to an app. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. */
    public ?string $appScopeId = null;

    /** When the schedule was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Identifier of the object through which this schedule was created. */
    public ?string $createdUsing = null;

    /** Identifier of the directory object representing the scope of the assignment or eligibility. The scope of an assignment or eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. */
    public ?string $directoryScopeId = null;

    /** When the schedule was last modified. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** Identifier of the principal that has been granted the role assignment or eligibility. */
    public ?string $principalId = null;

    /** Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that a principal is eligible for. */
    public ?string $roleDefinitionId = null;

    /** The status of the role assignment or eligibility request. */
    public ?string $status = null;

    /** 
     * Read-only property with details of the app-specific scope when the role eligibility or assignment is scoped to an app. Nullable.
     * @var AppScope|\stdClass|null
     */
    public mixed $appScope = null;

    /** 
     * The directory object that is the scope of the role eligibility or assignment. Read-only.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $directoryScope = null;

    /** 
     * The principal that's getting a role assignment or that's eligible for a role through the request.
     * @var DirectoryObject|\stdClass|null
     */
    public mixed $principal = null;

    /** 
     * Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.
     * @var UnifiedRoleDefinition|\stdClass|null
     */
    public mixed $roleDefinition = null;

    /** How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne). */
    public ?string $memberType = null;

    /** 
     * The period of the role eligibility.
     * @var RequestSchedule|\stdClass|null
     */
    public mixed $scheduleInfo = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appScopeId'])) {
            $this->appScopeId = $data['appScopeId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['createdUsing'])) {
            $this->createdUsing = $data['createdUsing'];
        }
        if (isset($data['directoryScopeId'])) {
            $this->directoryScopeId = $data['directoryScopeId'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['principalId'])) {
            $this->principalId = $data['principalId'];
        }
        if (isset($data['roleDefinitionId'])) {
            $this->roleDefinitionId = $data['roleDefinitionId'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['appScope'])) {
            $this->appScope = $data['appScope'];
        }
        if (isset($data['directoryScope'])) {
            $this->directoryScope = $data['directoryScope'];
        }
        if (isset($data['principal'])) {
            $this->principal = $data['principal'];
        }
        if (isset($data['roleDefinition'])) {
            $this->roleDefinition = $data['roleDefinition'];
        }
        if (isset($data['memberType'])) {
            $this->memberType = $data['memberType'];
        }
        if (isset($data['scheduleInfo'])) {
            $this->scheduleInfo = $data['scheduleInfo'];
        }
    }
}
