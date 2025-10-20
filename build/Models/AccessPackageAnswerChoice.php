<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswerChoice
 */
class AccessPackageAnswerChoice
{
    /**
     * The actual value of the selected choice. This is typically a string value which is understandable by applications. Required.
     */
    private ?string $actualValue;

    /**
     * The text of the answer choice represented in a format for a specific locale.
     */
    private array $localizations = [];

    /**
     * The string to display for this answer; if an Accept-Language header is provided, and there is a matching localization in localizations, this string will be the matching localized string; otherwise, this string remains as the default non-localized string. Required.
     */
    private ?string $text;

    public function getActualValue(): ?string
    {
        return $this->actualValue;
    }

    public function setActualValue(?string $actualValue): self
    {
        $this->actualValue = $actualValue;
        return $this;
    }

    public function getLocalizations(): array
    {
        return $this->localizations;
    }

    public function setLocalizations(array $localizations): self
    {
        $this->localizations = $localizations;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

}
