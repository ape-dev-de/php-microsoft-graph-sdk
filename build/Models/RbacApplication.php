<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RbacApplication
 */
class RbacApplication
{
    /**
     */
    private array $resourceNamespaces = [];

    /**
     * Resource to grant access to users or groups.
     */
    private array $roleAssignments = [];

    /**
     * Instances for active role assignments.
     */
    private array $roleAssignmentScheduleInstances = [];

    /**
     * Requests for active role assignments to principals through PIM.
     */
    private array $roleAssignmentScheduleRequests = [];

    /**
     * Schedules for active role assignment operations.
     */
    private array $roleAssignmentSchedules = [];

    /**
     * Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     */
    private array $roleDefinitions = [];

    /**
     * Instances for role eligibility requests.
     */
    private array $roleEligibilityScheduleInstances = [];

    /**
     * Requests for role eligibilities for principals through PIM.
     */
    private array $roleEligibilityScheduleRequests = [];

    /**
     * Schedules for role eligibility operations.
     */
    private ?string $roleEligibilitySchedules;

    public function getResourceNamespaces(): array
    {
        return $this->resourceNamespaces;
    }

    public function setResourceNamespaces(array $resourceNamespaces): self
    {
        $this->resourceNamespaces = $resourceNamespaces;
        return $this;
    }

    public function getRoleAssignments(): array
    {
        return $this->roleAssignments;
    }

    public function setRoleAssignments(array $roleAssignments): self
    {
        $this->roleAssignments = $roleAssignments;
        return $this;
    }

    public function getRoleAssignmentScheduleInstances(): array
    {
        return $this->roleAssignmentScheduleInstances;
    }

    public function setRoleAssignmentScheduleInstances(array $roleAssignmentScheduleInstances): self
    {
        $this->roleAssignmentScheduleInstances = $roleAssignmentScheduleInstances;
        return $this;
    }

    public function getRoleAssignmentScheduleRequests(): array
    {
        return $this->roleAssignmentScheduleRequests;
    }

    public function setRoleAssignmentScheduleRequests(array $roleAssignmentScheduleRequests): self
    {
        $this->roleAssignmentScheduleRequests = $roleAssignmentScheduleRequests;
        return $this;
    }

    public function getRoleAssignmentSchedules(): array
    {
        return $this->roleAssignmentSchedules;
    }

    public function setRoleAssignmentSchedules(array $roleAssignmentSchedules): self
    {
        $this->roleAssignmentSchedules = $roleAssignmentSchedules;
        return $this;
    }

    public function getRoleDefinitions(): array
    {
        return $this->roleDefinitions;
    }

    public function setRoleDefinitions(array $roleDefinitions): self
    {
        $this->roleDefinitions = $roleDefinitions;
        return $this;
    }

    public function getRoleEligibilityScheduleInstances(): array
    {
        return $this->roleEligibilityScheduleInstances;
    }

    public function setRoleEligibilityScheduleInstances(array $roleEligibilityScheduleInstances): self
    {
        $this->roleEligibilityScheduleInstances = $roleEligibilityScheduleInstances;
        return $this;
    }

    public function getRoleEligibilityScheduleRequests(): array
    {
        return $this->roleEligibilityScheduleRequests;
    }

    public function setRoleEligibilityScheduleRequests(array $roleEligibilityScheduleRequests): self
    {
        $this->roleEligibilityScheduleRequests = $roleEligibilityScheduleRequests;
        return $this;
    }

    public function getRoleEligibilitySchedules(): ?string
    {
        return $this->roleEligibilitySchedules;
    }

    public function setRoleEligibilitySchedules(?string $roleEligibilitySchedules): self
    {
        $this->roleEligibilitySchedules = $roleEligibilitySchedules;
        return $this;
    }

}
