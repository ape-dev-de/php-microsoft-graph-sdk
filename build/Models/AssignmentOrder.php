<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignmentOrder
 */
class AssignmentOrder
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A list of identityUserFlowAttribute object identifiers that determine the order in which attributes should be collected within a user flow.
     * @var string[]
     */
    public array $order = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['order'])) {
            $this->order = $data['order'];
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
