<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantAppManagementPolicy
 */
class TenantAppManagementPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** Description for this policy. Required. */
    public ?string $description = null;

    /** Display name for this policy. Required. */
    public ?string $displayName = null;

    /** 
     * Restrictions that apply as default to all application objects in the tenant.
     * @var AppManagementApplicationConfiguration|\stdClass|null
     */
    public mixed $applicationRestrictions = null;

    /** Denotes whether the policy is enabled. Default value is false. */
    public ?bool $isEnabled = null;

    /** 
     * Restrictions that apply as default to all service principal objects in the tenant.
     * @var AppManagementServicePrincipalConfiguration|\stdClass|null
     */
    public mixed $servicePrincipalRestrictions = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['applicationRestrictions'])) {
            $this->applicationRestrictions = is_array($data['applicationRestrictions']) ? new AppManagementApplicationConfiguration($data['applicationRestrictions']) : $data['applicationRestrictions'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['servicePrincipalRestrictions'])) {
            $this->servicePrincipalRestrictions = is_array($data['servicePrincipalRestrictions']) ? new AppManagementServicePrincipalConfiguration($data['servicePrincipalRestrictions']) : $data['servicePrincipalRestrictions'];
        }
    }
}
