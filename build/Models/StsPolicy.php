<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StsPolicy
 */
class StsPolicy
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
     * A string collection containing a JSON string that defines the rules and settings for a policy. The syntax for the definition differs for each derived policy type. Required.
     * @var string[]
     */
    public array $definition = [];

    /** If set to true, activates this policy. There can be many policies for the same policy type, but only one can be activated as the organization default. Optional, default value is false. */
    public ?bool $isOrganizationDefault = null;

    /** 
     * 
     * @var DirectoryObject[]
     */
    public array $appliesTo = [];


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
        if (isset($data['definition'])) {
            $this->definition = $data['definition'];
        }
        if (isset($data['isOrganizationDefault'])) {
            $this->isOrganizationDefault = is_bool($data['isOrganizationDefault']) ? $data['isOrganizationDefault'] : (bool)$data['isOrganizationDefault'];
        }
        if (isset($data['appliesTo'])) {
            $this->appliesTo = $data['appliesTo'];
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
