<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Approval
 */
class Approval
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of stages in the approval decision.
     * @var ApprovalStage[]
     */
    public array $stages = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['stages'])) {
            $this->stages = $data['stages'];
        }
    }
}
