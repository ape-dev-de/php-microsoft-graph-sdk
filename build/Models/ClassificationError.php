<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationError
 */
class ClassificationError
{
    /**
     * A collection of more specific errors contributing to the overall error.
     * @var string[]
     */
    private array $details = [];


    /**
     * @return string[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param string[] $details
     */
    public function setDetails(array $details): self
    {
        $this->details = $details;
        return $this;
    }

}
