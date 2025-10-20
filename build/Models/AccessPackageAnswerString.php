<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswerString
 */
class AccessPackageAnswerString
{
    /**
     * The value stored on the requestor''s user profile, if this answer is configured to be stored as a specific attribute.
     */
    private ?string $value;

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
