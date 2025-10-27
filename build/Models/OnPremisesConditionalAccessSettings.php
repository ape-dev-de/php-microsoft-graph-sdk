<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesConditionalAccessSettings
 */
class OnPremisesConditionalAccessSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates if on premises conditional access is enabled for this organization */
    public ?bool $enabled = null;

    /** 
     * User groups that will be exempt by on premises conditional access. All users in these groups will be exempt from the conditional access policy.
     * @var string[]
     */
    public array $excludedGroups = [];

    /** 
     * User groups that will be targeted by on premises conditional access. All users in these groups will be required to have mobile device managed and compliant for mail access.
     * @var string[]
     */
    public array $includedGroups = [];

    /** Override the default access rule when allowing a device to ensure access is granted. */
    public ?bool $overrideDefaultRule = null;


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
        if (isset($data['enabled'])) {
            $this->enabled = $data['enabled'];
        }
        if (isset($data['excludedGroups'])) {
            $this->excludedGroups = $data['excludedGroups'];
        }
        if (isset($data['includedGroups'])) {
            $this->includedGroups = $data['includedGroups'];
        }
        if (isset($data['overrideDefaultRule'])) {
            $this->overrideDefaultRule = $data['overrideDefaultRule'];
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
