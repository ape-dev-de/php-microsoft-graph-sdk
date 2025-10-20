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
     */
    private ?string $lists;

    public function getLists(): ?string
    {
        return $this->lists;
    }

    public function setLists(?string $lists): self
    {
        $this->lists = $lists;
        return $this;
    }

}
