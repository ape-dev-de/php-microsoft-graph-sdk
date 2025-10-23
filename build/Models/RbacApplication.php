<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RbacApplication
 */
class RbacApplication
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var UnifiedRbacResourceNamespace[]
     */
    public array $resourceNamespaces = [];

    /** 
     * Resource to grant access to users or groups.
     * @var UnifiedRoleAssignment[]
     */
    public array $roleAssignments = [];

    /** 
     * Instances for active role assignments.
     * @var UnifiedRoleAssignmentScheduleInstance[]
     */
    public array $roleAssignmentScheduleInstances = [];

    /** 
     * Requests for active role assignments to principals through PIM.
     * @var UnifiedRoleAssignmentScheduleRequest[]
     */
    public array $roleAssignmentScheduleRequests = [];

    /** 
     * Schedules for active role assignment operations.
     * @var UnifiedRoleAssignmentSchedule[]
     */
    public array $roleAssignmentSchedules = [];

    /** 
     * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     * @var UnifiedRoleDefinition[]
     */
    public array $roleDefinitions = [];

    /** 
     * Instances for role eligibility requests.
     * @var UnifiedRoleEligibilityScheduleInstance[]
     */
    public array $roleEligibilityScheduleInstances = [];

    /** 
     * Requests for role eligibilities for principals through PIM.
     * @var UnifiedRoleEligibilityScheduleRequest[]
     */
    public array $roleEligibilityScheduleRequests = [];

    /** 
     * Schedules for role eligibility operations.
     * @var UnifiedRoleEligibilitySchedule[]
     */
    public array $roleEligibilitySchedules = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['resourceNamespaces'])) {
            $this->resourceNamespaces = $data['resourceNamespaces'];
        }
        if (isset($data['roleAssignments'])) {
            $this->roleAssignments = $data['roleAssignments'];
        }
        if (isset($data['roleAssignmentScheduleInstances'])) {
            $this->roleAssignmentScheduleInstances = $data['roleAssignmentScheduleInstances'];
        }
        if (isset($data['roleAssignmentScheduleRequests'])) {
            $this->roleAssignmentScheduleRequests = $data['roleAssignmentScheduleRequests'];
        }
        if (isset($data['roleAssignmentSchedules'])) {
            $this->roleAssignmentSchedules = $data['roleAssignmentSchedules'];
        }
        if (isset($data['roleDefinitions'])) {
            $this->roleDefinitions = $data['roleDefinitions'];
        }
        if (isset($data['roleEligibilityScheduleInstances'])) {
            $this->roleEligibilityScheduleInstances = $data['roleEligibilityScheduleInstances'];
        }
        if (isset($data['roleEligibilityScheduleRequests'])) {
            $this->roleEligibilityScheduleRequests = $data['roleEligibilityScheduleRequests'];
        }
        if (isset($data['roleEligibilitySchedules'])) {
            $this->roleEligibilitySchedules = $data['roleEligibilitySchedules'];
        }
    }
}
