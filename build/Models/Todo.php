<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Todo
 */
class Todo
{
    /**
     * The task lists in the users mailbox.
     * @var string[]
     */
    private array $lists = [];


    /**
     * @return string[]
     */
    public function getLists(): array
    {
        return $this->lists;
    }

    /**
     * @param string[] $lists
     */
    public function setLists(array $lists): self
    {
        $this->lists = $lists;
        return $this;
    }

}
