<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TodoTaskList
 */
class TodoTaskList
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the task list. */
        public ?string $displayName = null,
        /** True if the user is owner of the given task list. */
        public ?bool $isOwner = null,
        /** True if the task list is shared with other users */
        public ?bool $isShared = null,
        /**  */
        public ?string $wellknownListName = null,
        /** The collection of open extensions defined for the task list. Nullable. */
        public array $extensions = [],
        /** @var string[] The tasks in this task list. Read-only. Nullable. */
        public array $tasks = []
    ) {}
}
