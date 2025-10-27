<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleAssignmentScheduleRequest
 */
class UnifiedRoleAssignmentScheduleRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The identifier of the approval of the request. */
    public ?string $approvalId = null;

    /** The request completion date time. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** 
     * The principal that created the request.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The request creation date time. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Free text field to define any custom data for the request. Not used. */
    public ?string $customData = null;

    /** The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
    public ?string $status = null;

    /** 
     * Represents the type of the operation on the role assignment request. The possible values are: adminAssign, adminUpdate, adminRemove, selfActivate, selfDeactivate, adminExtend, adminRenew, selfExtend, selfRenew, unknownFutureValue. adminAssign: For administrators to assign roles to principals.adminRemove: For administrators to remove principals from roles. adminUpdate: For administrators to change existing role assignments.adminExtend: For administrators to extend expiring assignments.adminRenew: For administrators to renew expired assignments.selfActivate: For principals to activate their assignments.selfDeactivate: For principals to deactivate their active assignments.selfExtend: For principals to request to extend their expiring assignments.selfRenew: For principals to request to renew their expired assignments.
     * @var UnifiedRoleScheduleRequestActions|\stdClass|null
     */
    public UnifiedRoleScheduleRequestActions|\stdClass|null $action = null;

    /** Identifier of the app-specific scope when the assignment is scoped to an app. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. Supports $filter (eq, ne, and on null values). */
    public ?string $appScopeId = null;

    /** Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. Supports $filter (eq, ne, and on null values). */
    public ?string $directoryScopeId = null;

    /** Determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
    public ?bool $isValidationOnly = null;

    /** A message provided by users and administrators when create they create the unifiedRoleAssignmentScheduleRequest object. */
    public ?string $justification = null;

    /** Identifier of the principal that has been granted the assignment. Can be a user, role-assignable group, or a service principal. Supports $filter (eq, ne). */
    public ?string $principalId = null;

    /** Identifier of the unifiedRoleDefinition object that is being assigned to the principal. Supports $filter (eq, ne). */
    public ?string $roleDefinitionId = null;

    /** 
     * The period of the role assignment. Recurring schedules are currently unsupported.
     * @var RequestSchedule|\stdClass|null
     */
    public RequestSchedule|\stdClass|null $scheduleInfo = null;

    /** Identifier of the schedule object that's linked to the assignment request. Supports $filter (eq, ne). */
    public ?string $targetScheduleId = null;

    /** 
     * Ticket details linked to the role assignment request including details of the ticket number and ticket system.
     * @var TicketInfo|\stdClass|null
     */
    public TicketInfo|\stdClass|null $ticketInfo = null;

    /** 
     * If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it's null. Supports $expand and $select nested in $expand.
     * @var UnifiedRoleEligibilitySchedule|\stdClass|null
     */
    public UnifiedRoleEligibilitySchedule|\stdClass|null $activatedUsing = null;

    /** 
     * Read-only property with details of the app-specific scope when the assignment is scoped to an app. Nullable. Supports $expand.
     * @var AppScope|\stdClass|null
     */
    public AppScope|\stdClass|null $appScope = null;

    /** 
     * The directory object that is the scope of the assignment. Read-only. Supports $expand.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $directoryScope = null;

    /** 
     * The principal that's getting a role assignment through the request. Supports $expand and $select nested in $expand for id only.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $principal = null;

    /** 
     * Detailed information for the unifiedRoleDefinition object that is referenced through the roleDefinitionId property. Supports $expand and $select nested in $expand.
     * @var UnifiedRoleDefinition|\stdClass|null
     */
    public UnifiedRoleDefinition|\stdClass|null $roleDefinition = null;

    /** 
     * The schedule for an eligible role assignment that is referenced through the targetScheduleId property. Supports $expand and $select nested in $expand.
     * @var UnifiedRoleAssignmentSchedule|\stdClass|null
     */
    public UnifiedRoleAssignmentSchedule|\stdClass|null $targetSchedule = null;


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
        if (isset($data['approvalId'])) {
            $this->approvalId = $data['approvalId'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customData'])) {
            $this->customData = $data['customData'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['action'])) {
            $this->action = is_string($data['action']) ? UnifiedRoleScheduleRequestActions::tryFrom($data['action']) : $data['action'];
        }
        if (isset($data['appScopeId'])) {
            $this->appScopeId = $data['appScopeId'];
        }
        if (isset($data['directoryScopeId'])) {
            $this->directoryScopeId = $data['directoryScopeId'];
        }
        if (isset($data['isValidationOnly'])) {
            $this->isValidationOnly = is_bool($data['isValidationOnly']) ? $data['isValidationOnly'] : (bool)$data['isValidationOnly'];
        }
        if (isset($data['justification'])) {
            $this->justification = $data['justification'];
        }
        if (isset($data['principalId'])) {
            $this->principalId = $data['principalId'];
        }
        if (isset($data['roleDefinitionId'])) {
            $this->roleDefinitionId = $data['roleDefinitionId'];
        }
        if (isset($data['scheduleInfo'])) {
            $this->scheduleInfo = is_array($data['scheduleInfo']) ? new RequestSchedule($data['scheduleInfo']) : $data['scheduleInfo'];
        }
        if (isset($data['targetScheduleId'])) {
            $this->targetScheduleId = $data['targetScheduleId'];
        }
        if (isset($data['ticketInfo'])) {
            $this->ticketInfo = is_array($data['ticketInfo']) ? new TicketInfo($data['ticketInfo']) : $data['ticketInfo'];
        }
        if (isset($data['activatedUsing'])) {
            $this->activatedUsing = is_array($data['activatedUsing']) ? new UnifiedRoleEligibilitySchedule($data['activatedUsing']) : $data['activatedUsing'];
        }
        if (isset($data['appScope'])) {
            $this->appScope = is_array($data['appScope']) ? new AppScope($data['appScope']) : $data['appScope'];
        }
        if (isset($data['directoryScope'])) {
            $this->directoryScope = is_array($data['directoryScope']) ? new DirectoryObject($data['directoryScope']) : $data['directoryScope'];
        }
        if (isset($data['principal'])) {
            $this->principal = is_array($data['principal']) ? new DirectoryObject($data['principal']) : $data['principal'];
        }
        if (isset($data['roleDefinition'])) {
            $this->roleDefinition = is_array($data['roleDefinition']) ? new UnifiedRoleDefinition($data['roleDefinition']) : $data['roleDefinition'];
        }
        if (isset($data['targetSchedule'])) {
            $this->targetSchedule = is_array($data['targetSchedule']) ? new UnifiedRoleAssignmentSchedule($data['targetSchedule']) : $data['targetSchedule'];
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
