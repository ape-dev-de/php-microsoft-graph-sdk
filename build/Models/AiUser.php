<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiUser
 */
class AiUser
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var AiInteractionHistory|\stdClass|null
     */
    public mixed $interactionHistory = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['interactionHistory'])) {
            $this->interactionHistory = is_array($data['interactionHistory']) ? new AiInteractionHistory($data['interactionHistory']) : $data['interactionHistory'];
        }
    }
}
