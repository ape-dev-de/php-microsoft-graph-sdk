<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswer
 */
class AccessPackageAnswer
{
    /**
     * The localized display value shown to the requestor and approvers.
     */
    private ?string $displayValue;

    /**
     */
    private ?string $answeredQuestion;


    public function getDisplayValue(): ?string
    {
        return $this->displayValue;
    }

    public function setDisplayValue(?string $displayValue): self
    {
        $this->displayValue = $displayValue;
        return $this;
    }

    public function getAnsweredQuestion(): ?string
    {
        return $this->answeredQuestion;
    }

    public function setAnsweredQuestion(?string $answeredQuestion): self
    {
        $this->answeredQuestion = $answeredQuestion;
        return $this;
    }

}
