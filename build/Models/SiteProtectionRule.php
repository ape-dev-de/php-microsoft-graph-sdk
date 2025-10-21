<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SiteProtectionRule
 */
class SiteProtectionRule
{
    /**
     * Contains a site expression. For examples, see siteExpression example.
     */
    private ?string $siteExpression;


    public function getSiteExpression(): ?string
    {
        return $this->siteExpression;
    }

    public function setSiteExpression(?string $siteExpression): self
    {
        $this->siteExpression = $siteExpression;
        return $this;
    }

}
