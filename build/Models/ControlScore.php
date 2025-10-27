<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ControlScore
 */
class ControlScore
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Control action category (Identity, Data, Device, Apps, Infrastructure). */
    public ?string $controlCategory = null;

    /** Control unique name. */
    public ?string $controlName = null;

    /** Description of the control. */
    public ?string $description = null;

    /** Tenant achieved score for the control (it varies day by day depending on tenant operations on the control). */
    public ?string $score = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['controlCategory'])) {
            $this->controlCategory = $data['controlCategory'];
        }
        if (isset($data['controlName'])) {
            $this->controlName = $data['controlName'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['score'])) {
            $this->score = $data['score'];
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
