<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDispositionReviewStage
 */
class SecurityDispositionReviewStage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Name representing each stage within a collection. */
    public ?string $name = null;

    /** 
     * A collection of reviewers at each stage.
     * @var string[]
     */
    public array $reviewersEmailAddresses = [];

    /** The unique sequence number for each stage of the disposition review. */
    public ?string $stageNumber = null;


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
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['reviewersEmailAddresses'])) {
            $this->reviewersEmailAddresses = $data['reviewersEmailAddresses'];
        }
        if (isset($data['stageNumber'])) {
            $this->stageNumber = $data['stageNumber'];
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
