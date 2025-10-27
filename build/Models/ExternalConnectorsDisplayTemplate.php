<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsDisplayTemplate
 */
class ExternalConnectorsDisplayTemplate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The text identifier for the display template; for example, contosoTickets. Maximum 16 characters. Only alphanumeric characters allowed. */
    public ?string $id = null;

    /** The definition of the content's appearance, represented by an Adaptive Card, which is a JSON-serialized card object model. */
    public ?string $layout = null;

    /** Defines the priority of a display template. A display template with priority 1 is evaluated before a template with priority 4. Gaps in priority values are supported. Must be positive value. */
    public ?float $priority = null;

    /** 
     * Specifies additional rules for selecting this display template based on the item schema. Optional.
     * @var ExternalConnectorsPropertyRule[]
     */
    public array $rules = [];


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
        if (isset($data['layout'])) {
            $this->layout = $data['layout'];
        }
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
        if (isset($data['rules'])) {
            $this->rules = $data['rules'];
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
