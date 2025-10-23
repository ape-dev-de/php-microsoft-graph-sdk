<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityTriggerTypesRoot
 */
class SecurityTriggerTypesRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var SecurityRetentionEventType[]
     */
    public array $retentionEventTypes = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['retentionEventTypes'])) {
            $this->retentionEventTypes = $data['retentionEventTypes'];
        }
    }
}
