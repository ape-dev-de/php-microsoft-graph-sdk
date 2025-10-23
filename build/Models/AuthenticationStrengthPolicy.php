<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthPolicy
 */
class AuthenticationStrengthPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of authentication method modes that are required be used to satify this authentication strength.
     * @var AuthenticationMethodModes[]
     */
    public array $allowedCombinations = [];

    /** The datetime when this policy was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The human-readable description of this policy. */
    public ?string $description = null;

    /** The human-readable display name of this policy. Supports $filter (eq, ne, not , and in). */
    public ?string $displayName = null;

    /** The datetime when this policy was last modified. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /**  */
    public ?AuthenticationStrengthPolicyType $policyType = null;

    /**  */
    public ?AuthenticationStrengthRequirements $requirementsSatisfied = null;

    /** 
     * Settings that may be used to require specific types or instances of an authentication method to be used when authenticating with a specified combination of authentication methods.
     * @var AuthenticationCombinationConfiguration[]
     */
    public array $combinationConfigurations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['allowedCombinations'])) {
            $this->allowedCombinations = $data['allowedCombinations'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (isset($data['policyType'])) {
            $this->policyType = $data['policyType'];
        }
        if (isset($data['requirementsSatisfied'])) {
            $this->requirementsSatisfied = $data['requirementsSatisfied'];
        }
        if (isset($data['combinationConfigurations'])) {
            $this->combinationConfigurations = $data['combinationConfigurations'];
        }
    }
}
