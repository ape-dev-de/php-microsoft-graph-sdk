<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WhatIfAnalysisResult
 */
class WhatIfAnalysisResult
{
    /**
     */
    private ?string $analysisReasons;

    /**
     * Specifies whether the policy applies to the sign-in properties provided in the request body. If policyApplies is true, the policy applies to the sign-in based on the sign-in properties provided. If policyApplies is false, the policy doesn''t apply to the sign-in based on the sign-in properties provided and the analysisReasons property is populated to show the reason for the policy not applying.
     */
    private ?string $policyApplies;

    public function getAnalysisReasons(): ?string
    {
        return $this->analysisReasons;
    }

    public function setAnalysisReasons(?string $analysisReasons): self
    {
        $this->analysisReasons = $analysisReasons;
        return $this;
    }

    public function getPolicyApplies(): ?string
    {
        return $this->policyApplies;
    }

    public function setPolicyApplies(?string $policyApplies): self
    {
        $this->policyApplies = $policyApplies;
        return $this;
    }

}
