<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceLifecycleWorkflowsContainer
 */
class IdentityGovernanceLifecycleWorkflowsContainer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The customTaskExtension instance.
     * @var IdentityGovernanceCustomTaskExtension[]
     */
    public array $customTaskExtensions = [];

    /** 
     * Deleted workflows in your lifecycle workflows instance.
     * @var DeletedItemContainer|\stdClass|null
     */
    public mixed $deletedItems = null;

    /** 
     * The insight container holding workflow insight summaries for a tenant.
     * @var IdentityGovernanceInsights|\stdClass|null
     */
    public mixed $insights = null;

    /**  */
    public ?IdentityGovernanceLifecycleManagementSettings $settings = null;

    /** 
     * The definition of tasks within the lifecycle workflows instance.
     * @var IdentityGovernanceTaskDefinition[]
     */
    public array $taskDefinitions = [];

    /** 
     * The workflows in the lifecycle workflows instance.
     * @var IdentityGovernanceWorkflow[]
     */
    public array $workflows = [];

    /** 
     * The workflow templates in the lifecycle workflow instance.
     * @var IdentityGovernanceWorkflowTemplate[]
     */
    public array $workflowTemplates = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['customTaskExtensions'])) {
            $this->customTaskExtensions = $data['customTaskExtensions'];
        }
        if (isset($data['deletedItems'])) {
            $this->deletedItems = $data['deletedItems'];
        }
        if (isset($data['insights'])) {
            $this->insights = $data['insights'];
        }
        if (isset($data['settings'])) {
            $this->settings = $data['settings'];
        }
        if (isset($data['taskDefinitions'])) {
            $this->taskDefinitions = $data['taskDefinitions'];
        }
        if (isset($data['workflows'])) {
            $this->workflows = $data['workflows'];
        }
        if (isset($data['workflowTemplates'])) {
            $this->workflowTemplates = $data['workflowTemplates'];
        }
    }
}
