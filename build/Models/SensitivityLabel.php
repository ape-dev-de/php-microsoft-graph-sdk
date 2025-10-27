<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabel
 */
class SensitivityLabel
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var LabelActionSource|\stdClass|null
     */
    public mixed $actionSource = null;

    /**  */
    public ?string $autoTooltip = null;

    /**  */
    public ?string $description = null;

    /**  */
    public ?string $displayName = null;

    /**  */
    public ?bool $isDefault = null;

    /**  */
    public ?bool $isEndpointProtectionEnabled = null;

    /**  */
    public ?bool $isScopedToUser = null;

    /**  */
    public ?string $locale = null;

    /**  */
    public ?string $name = null;

    /**  */
    public ?float $priority = null;

    /**  */
    public ?string $toolTip = null;

    /** 
     * 
     * @var UsageRightsIncluded|\stdClass|null
     */
    public mixed $rights = null;

    /** 
     * 
     * @var SensitivityLabel[]
     */
    public array $sublabels = [];


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
        if (isset($data['actionSource'])) {
            $this->actionSource = is_array($data['actionSource']) ? new LabelActionSource($data['actionSource']) : $data['actionSource'];
        }
        if (isset($data['autoTooltip'])) {
            $this->autoTooltip = $data['autoTooltip'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['isEndpointProtectionEnabled'])) {
            $this->isEndpointProtectionEnabled = $data['isEndpointProtectionEnabled'];
        }
        if (isset($data['isScopedToUser'])) {
            $this->isScopedToUser = $data['isScopedToUser'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
        if (isset($data['toolTip'])) {
            $this->toolTip = $data['toolTip'];
        }
        if (isset($data['rights'])) {
            $this->rights = is_array($data['rights']) ? new UsageRightsIncluded($data['rights']) : $data['rights'];
        }
        if (isset($data['sublabels'])) {
            $this->sublabels = $data['sublabels'];
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
