<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceAttributeQuestion
 */
class AccessPackageResourceAttributeQuestion
{
    /**
     */
    private ?string $question;


    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;
        return $this;
    }

}
