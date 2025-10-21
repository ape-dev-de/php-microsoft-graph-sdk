<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputation
 */
class SecurityHostReputation
{
    /**
     */
    private ?string $classification;

    /**
     * A collection of rules that have been used to calculate the classification and score.
     */
    private array $rules = [];

    /**
     * The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious.
     */
    private ?string $score;


    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;
        return $this;
    }

    public function getRules(): array
    {
        return $this->rules;
    }

    public function setRules(array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;
        return $this;
    }

}
