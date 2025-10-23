<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintTask
 */
class PrintTask
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The URL for the print entity that triggered this task. For example, https://graph.microsoft.com/v1.0/print/printers/{printerId}/jobs/{jobId}. Read-only. */
    public ?string $parentUrl = null;

    /**  */
    public ?PrintTaskStatus $status = null;

    /**  */
    public ?PrintTaskDefinition $definition = null;

    /**  */
    public ?PrintTaskTrigger $trigger = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['parentUrl'])) {
            $this->parentUrl = $data['parentUrl'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new PrintTaskStatus($data['status']) : $data['status'];
        }
        if (isset($data['definition'])) {
            $this->definition = is_array($data['definition']) ? new PrintTaskDefinition($data['definition']) : $data['definition'];
        }
        if (isset($data['trigger'])) {
            $this->trigger = is_array($data['trigger']) ? new PrintTaskTrigger($data['trigger']) : $data['trigger'];
        }
    }
}
