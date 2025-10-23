<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsOverview
 */
class UserExperienceAnalyticsOverview
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The user experience analytics insights. Read-only.
     * @var UserExperienceAnalyticsInsight[]
     */
    public array $insights = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['insights'])) {
            $this->insights = $data['insights'];
        }
    }
}
