<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTaskTrigger
 */
class PrintTaskTrigger
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['event'])) {
            $this->event = $data['event'];
        }
        if (isset($data['definition'])) {
            $this->definition = $data['definition'];
        }
    }
}
