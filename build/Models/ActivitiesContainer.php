<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivitiesContainer
 */
class ActivitiesContainer
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Collection of activity logs related to content processing.
     * @var ContentActivity[]
     */
    public array $contentActivities = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['contentActivities'])) {
            $this->contentActivities = $data['contentActivities'];
        }
    }
}
