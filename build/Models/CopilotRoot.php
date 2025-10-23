<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotRoot
 */
class CopilotRoot
{
    /** 
     * 
     * @var CopilotAdmin|\stdClass|null
     */
    public mixed $admin = null;

    /** 
     * 
     * @var AiInteractionHistory|\stdClass|null
     */
    public mixed $interactionHistory = null;

    /** 
     * 
     * @var AiUser[]
     */
    public array $users = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['admin'])) {
            $this->admin = $data['admin'];
        }
        if (isset($data['interactionHistory'])) {
            $this->interactionHistory = $data['interactionHistory'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
        }
    }
}
