<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UpdateAllowedCombinationsResult
 */
class UpdateAllowedCombinationsResult
{
    /**
     * Information about why the updateAllowedCombinations action was successful or failed.
     */
    private ?string $additionalInformation;

    /**
     * References to existing Conditional Access policies that use this authentication strength.
     * @var string[]
     */
    private array $conditionalAccessReferences = [];

    /**
     * The list of current authentication method combinations allowed by the authentication strength.
     */
    private array $currentCombinations = [];

    /**
     * The list of former authentication method combinations allowed by the authentication strength before they were updated through the updateAllowedCombinations action.
     * @var string[]
     */
    private array $previousCombinations = [];


    public function getAdditionalInformation(): ?string
    {
        return $this->additionalInformation;
    }

    public function setAdditionalInformation(?string $additionalInformation): self
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getConditionalAccessReferences(): array
    {
        return $this->conditionalAccessReferences;
    }

    /**
     * @param string[] $conditionalAccessReferences
     */
    public function setConditionalAccessReferences(array $conditionalAccessReferences): self
    {
        $this->conditionalAccessReferences = $conditionalAccessReferences;
        return $this;
    }

    public function getCurrentCombinations(): array
    {
        return $this->currentCombinations;
    }

    public function setCurrentCombinations(array $currentCombinations): self
    {
        $this->currentCombinations = $currentCombinations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPreviousCombinations(): array
    {
        return $this->previousCombinations;
    }

    /**
     * @param string[] $previousCombinations
     */
    public function setPreviousCombinations(array $previousCombinations): self
    {
        $this->previousCombinations = $previousCombinations;
        return $this;
    }

}
