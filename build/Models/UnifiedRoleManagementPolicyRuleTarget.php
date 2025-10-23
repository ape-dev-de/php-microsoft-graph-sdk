<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyRuleTarget
 */
class UnifiedRoleManagementPolicyRuleTarget
{
    /** The type of caller that's the target of the policy rule. Allowed values are: None, Admin, EndUser. */
    public ?string $caller = null;

    /** 
     * The list of role settings that are enforced and cannot be overridden by child scopes. Use All for all settings.
     * @var string[]
     */
    public array $enforcedSettings = [];

    /** 
     * The list of role settings that can be inherited by child scopes. Use All for all settings.
     * @var string[]
     */
    public array $inheritableSettings = [];

    /** The role assignment type that's the target of policy rule. Allowed values are: Eligibility, Assignment. */
    public ?string $level = null;

    /** 
     * The role management operations that are the target of the policy rule. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
     * @var UnifiedRoleManagementPolicyRuleTargetOperations[]
     */
    public array $operations = [];

    /** 
     * 
     * @var DirectoryObject[]
     */
    public array $targetObjects = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['caller'])) {
            $this->caller = $data['caller'];
        }
        if (isset($data['enforcedSettings'])) {
            $this->enforcedSettings = $data['enforcedSettings'];
        }
        if (isset($data['inheritableSettings'])) {
            $this->inheritableSettings = $data['inheritableSettings'];
        }
        if (isset($data['level'])) {
            $this->level = $data['level'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['targetObjects'])) {
            $this->targetObjects = $data['targetObjects'];
        }
    }
}
