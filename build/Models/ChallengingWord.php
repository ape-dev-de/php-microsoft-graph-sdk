<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChallengingWord
 */
class ChallengingWord
{
    /**
     * Number of times the word was found challenging by the student during the reading session.
     */
    private ?float $count;

    /**
     * The specific word that the student found challenging during the reading session.
     */
    private ?string $word;

    public function getCount(): ?float
    {
        return $this->count;
    }

    public function setCount(?float $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function getWord(): ?string
    {
        return $this->word;
    }

    public function setWord(?string $word): self
    {
        $this->word = $word;
        return $this;
    }

}
