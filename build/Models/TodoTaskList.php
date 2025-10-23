<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TodoTaskList
 */
class TodoTaskList
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the task list. */
    public ?string $displayName = null;

    /** True if the user is owner of the given task list. */
    public ?bool $isOwner = null;

    /** True if the task list is shared with other users */
    public ?bool $isShared = null;

    /**  */
    public ?WellknownListName $wellknownListName = null;

    /** 
     * The collection of open extensions defined for the task list. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * The tasks in this task list. Read-only. Nullable.
     * @var TodoTask[]
     */
    public array $tasks = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isOwner'])) {
            $this->isOwner = $data['isOwner'];
        }
        if (isset($data['isShared'])) {
            $this->isShared = $data['isShared'];
        }
        if (isset($data['wellknownListName'])) {
            $this->wellknownListName = is_array($data['wellknownListName']) ? new WellknownListName($data['wellknownListName']) : $data['wellknownListName'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['tasks'])) {
            $this->tasks = $data['tasks'];
        }
    }
}
