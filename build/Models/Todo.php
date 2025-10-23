<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Todo
 */
class Todo
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The task lists in the users mailbox.
     * @var TodoTaskList[]
     */
    public array $lists = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['lists'])) {
            $this->lists = $data['lists'];
        }
    }
}
