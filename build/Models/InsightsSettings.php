<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightsSettings
 */
class InsightsSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The ID of a Microsoft Entra group, of which the specified type of insights are disabled for its members. The default value is null. Optional. */
    public ?string $disabledForGroup = null;

    /** true if insights of the specified type are enabled for the organization; false if insights of the specified type are disabled for all users without exceptions. The default value is true. Optional. */
    public ?bool $isEnabledInOrganization = null;


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
        if (isset($data['disabledForGroup'])) {
            $this->disabledForGroup = $data['disabledForGroup'];
        }
        if (isset($data['isEnabledInOrganization'])) {
            $this->isEnabledInOrganization = is_bool($data['isEnabledInOrganization']) ? $data['isEnabledInOrganization'] : (bool)$data['isEnabledInOrganization'];
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
