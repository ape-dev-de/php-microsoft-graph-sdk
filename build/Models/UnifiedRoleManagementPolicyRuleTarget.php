<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyRuleTarget
 */
class UnifiedRoleManagementPolicyRuleTarget
{
    /**
     * The type of caller that''s the target of the policy rule. Allowed values are: None, Admin, EndUser.
     */
    private ?string $caller;

    /**
     * The list of role settings that are enforced and cannot be overridden by child scopes. Use All for all settings.
     * @var string[]
     */
    private array $enforcedSettings = [];

    /**
     * The list of role settings that can be inherited by child scopes. Use All for all settings.
     * @var string[]
     */
    private array $inheritableSettings = [];

    /**
     * The role assignment type that''s the target of policy rule. Allowed values are: Eligibility, Assignment.
     */
    private ?string $level;

    /**
     * The role management operations that are the target of the policy rule. Allowed values are: All, Activate, Deactivate, Assign, Update, Remove, Extend, Renew.
     */
    private array $operations = [];

    /**
     * @var string[]
     */
    private array $targetObjects = [];


    public function getCaller(): ?string
    {
        return $this->caller;
    }

    public function setCaller(?string $caller): self
    {
        $this->caller = $caller;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getEnforcedSettings(): array
    {
        return $this->enforcedSettings;
    }

    /**
     * @param string[] $enforcedSettings
     */
    public function setEnforcedSettings(array $enforcedSettings): self
    {
        $this->enforcedSettings = $enforcedSettings;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getInheritableSettings(): array
    {
        return $this->inheritableSettings;
    }

    /**
     * @param string[] $inheritableSettings
     */
    public function setInheritableSettings(array $inheritableSettings): self
    {
        $this->inheritableSettings = $inheritableSettings;
        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTargetObjects(): array
    {
        return $this->targetObjects;
    }

    /**
     * @param string[] $targetObjects
     */
    public function setTargetObjects(array $targetObjects): self
    {
        $this->targetObjects = $targetObjects;
        return $this;
    }

}
