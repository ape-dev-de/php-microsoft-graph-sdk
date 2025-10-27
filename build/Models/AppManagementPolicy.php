<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppManagementPolicy
 */
class AppManagementPolicy
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

    /** Denotes whether the policy is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * Restrictions that apply to an application or service principal object.
     * @var CustomAppManagementConfiguration|\stdClass|null
     */
    public CustomAppManagementConfiguration|\stdClass|null $restrictions = null;

    /** 
     * Collection of applications and service principals to which the policy is applied.
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
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['restrictions'])) {
            $this->restrictions = is_array($data['restrictions']) ? new CustomAppManagementConfiguration($data['restrictions']) : $data['restrictions'];
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
