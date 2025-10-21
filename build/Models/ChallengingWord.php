<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChallengingWord
 */
class ChallengingWord
{
    public function __construct(
        /** Number of times the word was found challenging by the student during the reading session. */
        public ?float $count = null,
        /** The specific word that the student found challenging during the reading session. */
        public ?string $word = null
    ) {}
}
