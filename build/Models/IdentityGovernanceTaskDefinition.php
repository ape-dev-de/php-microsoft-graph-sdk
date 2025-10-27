<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTaskDefinition
 */
class IdentityGovernanceTaskDefinition
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?IdentityGovernanceLifecycleTaskCategory $category = null;

    /** Defines if the workflow will continue if the task has an error. */
    public ?bool $continueOnError = null;

    /** The description of the taskDefinition. */
    public ?string $description = null;

    /** The display name of the taskDefinition.Supports $filter(eq, ne) and $orderby. */
    public ?string $displayName = null;

    /** 
     * The parameters that must be supplied when creating a workflow task object.Supports $filter(any).
     * @var IdentityGovernanceParameter[]
     */
    public array $parameters = [];

    /** The version number of the taskDefinition. New records are pushed when we add support for new parameters.Supports $filter(ge, gt, le, lt, eq, ne) and $orderby. */
    public ?float $version = null;


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
        if (isset($data['category'])) {
            $this->category = is_string($data['category']) ? IdentityGovernanceLifecycleTaskCategory::tryFrom($data['category']) : $data['category'];
        }
        if (isset($data['continueOnError'])) {
            $this->continueOnError = is_bool($data['continueOnError']) ? $data['continueOnError'] : (bool)$data['continueOnError'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['parameters'])) {
            $this->parameters = $data['parameters'];
        }
        if (isset($data['version'])) {
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
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
