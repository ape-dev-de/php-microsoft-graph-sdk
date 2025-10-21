<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookCategory
 */
class OutlookCategory
{
    /**
     * A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. For more details, see the following note.
     */
    private ?string $color;

    /**
     * A unique name that identifies a category in the user''s mailbox. After a category is created, the name cannot be changed. Read-only.
     */
    private ?string $displayName;


    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

}
