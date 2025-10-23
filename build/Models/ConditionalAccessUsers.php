<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessUsers
 */
class ConditionalAccessUsers
{
    /** 
     * Group IDs excluded from scope of policy.
     * @var string[]
     */
    public array $excludeGroups = [];

    /** 
     * Internal guests or external users excluded from the policy scope. Optionally populated.
     * @var ConditionalAccessGuestsOrExternalUsers|\stdClass|null
     */
    public mixed $excludeGuestsOrExternalUsers = null;

    /** 
     * Role IDs excluded from scope of policy.
     * @var string[]
     */
    public array $excludeRoles = [];

    /** 
     * User IDs excluded from scope of policy and/or GuestsOrExternalUsers.
     * @var string[]
     */
    public array $excludeUsers = [];

    /** 
     * Group IDs in scope of policy unless explicitly excluded.
     * @var string[]
     */
    public array $includeGroups = [];

    /** 
     * Internal guests or external users included in the policy scope. Optionally populated.
     * @var ConditionalAccessGuestsOrExternalUsers|\stdClass|null
     */
    public mixed $includeGuestsOrExternalUsers = null;

    /** 
     * Role IDs in scope of policy unless explicitly excluded.
     * @var string[]
     */
    public array $includeRoles = [];

    /** 
     * User IDs in scope of policy unless explicitly excluded, None, All, or GuestsOrExternalUsers.
     * @var string[]
     */
    public array $includeUsers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['excludeGroups'])) {
            $this->excludeGroups = $data['excludeGroups'];
        }
        if (isset($data['excludeGuestsOrExternalUsers'])) {
            $this->excludeGuestsOrExternalUsers = $data['excludeGuestsOrExternalUsers'];
        }
        if (isset($data['excludeRoles'])) {
            $this->excludeRoles = $data['excludeRoles'];
        }
        if (isset($data['excludeUsers'])) {
            $this->excludeUsers = $data['excludeUsers'];
        }
        if (isset($data['includeGroups'])) {
            $this->includeGroups = $data['includeGroups'];
        }
        if (isset($data['includeGuestsOrExternalUsers'])) {
            $this->includeGuestsOrExternalUsers = $data['includeGuestsOrExternalUsers'];
        }
        if (isset($data['includeRoles'])) {
            $this->includeRoles = $data['includeRoles'];
        }
        if (isset($data['includeUsers'])) {
            $this->includeUsers = $data['includeUsers'];
        }
    }
}
