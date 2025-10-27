<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotRoot
 */
class CopilotRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['admin'])) {
            $this->admin = is_array($data['admin']) ? new CopilotAdmin($data['admin']) : $data['admin'];
        }
        if (isset($data['interactionHistory'])) {
            $this->interactionHistory = is_array($data['interactionHistory']) ? new AiInteractionHistory($data['interactionHistory']) : $data['interactionHistory'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
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
