<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicy
 */
class CrossTenantAccessPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** Description for this policy. Required. */
    public ?string $description = null;

    /** Display name for this policy. Required. */
    public ?string $displayName = null;

    /** 
     * Used to specify which Microsoft clouds an organization would like to collaborate with. By default, this value is empty. Supported values for this field are: microsoftonline.com, microsoftonline.us, and partner.microsoftonline.cn.
     * @var string[]
     */
    public array $allowedCloudEndpoints = [];

    /** 
     * Defines the default configuration for how your organization interacts with external Microsoft Entra organizations.
     * @var CrossTenantAccessPolicyConfigurationDefault|\stdClass|null
     */
    public CrossTenantAccessPolicyConfigurationDefault|\stdClass|null $default = null;

    /** 
     * Defines partner-specific configurations for external Microsoft Entra organizations.
     * @var CrossTenantAccessPolicyConfigurationPartner[]
     */
    public array $partners = [];

    /** 
     * Represents the base policy in the directory for multitenant organization settings.
     * @var PolicyTemplate|\stdClass|null
     */
    public PolicyTemplate|\stdClass|null $templates = null;


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
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['allowedCloudEndpoints'])) {
            $this->allowedCloudEndpoints = $data['allowedCloudEndpoints'];
        }
        if (isset($data['default'])) {
            $this->default = is_array($data['default']) ? new CrossTenantAccessPolicyConfigurationDefault($data['default']) : $data['default'];
        }
        if (isset($data['partners'])) {
            $this->partners = $data['partners'];
        }
        if (isset($data['templates'])) {
            $this->templates = is_array($data['templates']) ? new PolicyTemplate($data['templates']) : $data['templates'];
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
