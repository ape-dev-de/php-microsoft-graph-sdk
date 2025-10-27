<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraint
 */
class LocationConstraint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The client requests the service to include in the response a meeting location for the meeting. If this is true and all the resources are busy, findMeetingTimes won't return any meeting time suggestions. If this is false and all the resources are busy, findMeetingTimes would still look for meeting times without locations. */
    public ?bool $isRequired = null;

    /** 
     * Constraint information for one or more locations that the client requests for the meeting.
     * @var LocationConstraintItem[]
     */
    public array $locations = [];

    /** The client requests the service to suggest one or more meeting locations. */
    public ?bool $suggestLocation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isRequired'])) {
            $this->isRequired = $data['isRequired'];
        }
        if (isset($data['locations'])) {
            $this->locations = $data['locations'];
        }
        if (isset($data['suggestLocation'])) {
            $this->suggestLocation = $data['suggestLocation'];
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
