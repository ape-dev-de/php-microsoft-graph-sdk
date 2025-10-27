<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditions
 */
class TermsAndConditions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Administrator-supplied explanation of the terms and conditions, typically describing what it means to accept the terms and conditions set out in the T&C policy. This is shown to the user on prompts to accept the T&C policy. */
    public ?string $acceptanceStatement = null;

    /** Administrator-supplied body text of the terms and conditions, typically the terms themselves. This is shown to the user on prompts to accept the T&C policy. */
    public ?string $bodyText = null;

    /** DateTime the object was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Administrator-supplied description of the T&C policy. */
    public ?string $description = null;

    /** Administrator-supplied name for the T&C policy. */
    public ?string $displayName = null;

    /** DateTime the object was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Administrator-supplied title of the terms and conditions. This is shown to the user on prompts to accept the T&C policy. */
    public ?string $title = null;

    /** Integer indicating the current version of the terms. Incremented when an administrator makes a change to the terms and wishes to require users to re-accept the modified T&C policy. */
    public ?float $version = null;

    /** 
     * The list of acceptance statuses for this T&C policy.
     * @var TermsAndConditionsAcceptanceStatus[]
     */
    public array $acceptanceStatuses = [];

    /** 
     * The list of assignments for this T&C policy.
     * @var TermsAndConditionsAssignment[]
     */
    public array $assignments = [];


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
        if (isset($data['acceptanceStatement'])) {
            $this->acceptanceStatement = $data['acceptanceStatement'];
        }
        if (isset($data['bodyText'])) {
            $this->bodyText = $data['bodyText'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['version'])) {
            $this->version = is_numeric($data['version']) ? (float)$data['version'] : $data['version'];
        }
        if (isset($data['acceptanceStatuses'])) {
            $this->acceptanceStatuses = $data['acceptanceStatuses'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
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
