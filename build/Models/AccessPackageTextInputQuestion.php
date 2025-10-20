<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageTextInputQuestion
 */
class AccessPackageTextInputQuestion
{
    /**
     * Indicates whether the answer is in single or multiple line format.
     */
    private ?bool $isSingleLineQuestion;

    /**
     * The regular expression pattern that any answer to this question must match.
     */
    private ?string $regexPattern;

    public function getIsSingleLineQuestion(): ?bool
    {
        return $this->isSingleLineQuestion;
    }

    public function setIsSingleLineQuestion(?bool $isSingleLineQuestion): self
    {
        $this->isSingleLineQuestion = $isSingleLineQuestion;
        return $this;
    }

    public function getRegexPattern(): ?string
    {
        return $this->regexPattern;
    }

    public function setRegexPattern(?string $regexPattern): self
    {
        $this->regexPattern = $regexPattern;
        return $this;
    }

}
