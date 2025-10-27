<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskTrigger
 */
class PrintTaskTrigger
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?PrintEvent $event = null;

    /**  */
    public ?PrintTaskDefinition $definition = null;


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
        if (isset($data['event'])) {
            $this->event = is_string($data['event']) ? PrintEvent::tryFrom($data['event']) : $data['event'];
        }
        if (isset($data['definition'])) {
            $this->definition = is_array($data['definition']) ? new PrintTaskDefinition($data['definition']) : $data['definition'];
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
