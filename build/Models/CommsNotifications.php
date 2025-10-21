<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotifications
 */
class CommsNotifications
{
    /**
     * The notification of a change in the resource.
     * @var string[]
     */
    private array $value = [];


    /**
     * @return string[]
     */
    public function getValue(): array
    {
        return $this->value;
    }

    /**
     * @param string[] $value
     */
    public function setValue(array $value): self
    {
        $this->value = $value;
        return $this;
    }

}
