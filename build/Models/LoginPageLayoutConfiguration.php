<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LoginPageLayoutConfiguration
 */
class LoginPageLayoutConfiguration
{
    /**
     * Option to show the footer on the sign-in page.
     */
    private ?bool $isFooterShown;

    /**
     * Option to show the header on the sign-in page.
     */
    private ?bool $isHeaderShown;

    /**
     * Represents the layout template to be displayed on the login page for a tenant. The possible values are  default - Represents the default Microsoft layout with a centered lightbox.  verticalSplit - Represents a layout with a background on the left side and a full-height lightbox to the right.  unknownFutureValue - Evolvable enumeration sentinel value. Don't use.
     */
    private ?string $layoutTemplateType;

    public function getIsFooterShown(): ?bool
    {
        return $this->isFooterShown;
    }

    public function setIsFooterShown(?bool $isFooterShown): self
    {
        $this->isFooterShown = $isFooterShown;
        return $this;
    }

    public function getIsHeaderShown(): ?bool
    {
        return $this->isHeaderShown;
    }

    public function setIsHeaderShown(?bool $isHeaderShown): self
    {
        $this->isHeaderShown = $isHeaderShown;
        return $this;
    }

    public function getLayoutTemplateType(): ?string
    {
        return $this->layoutTemplateType;
    }

    public function setLayoutTemplateType(?string $layoutTemplateType): self
    {
        $this->layoutTemplateType = $layoutTemplateType;
        return $this;
    }

}
